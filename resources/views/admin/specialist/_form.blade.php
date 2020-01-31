<?php
/**
 * @var $model \App\models\Specialist
 */
?>

<div class="row">
    <div class="col-sm-6 col-12">
        {!!Form::text('last_name', 'Фамилия')!!}
        {!!Form::text('first_name', 'Имя')!!}
        {!!Form::text('middle_name', 'Отчество')!!}
    </div>
    <div class="col-sm-6 col-12">
        {!!Form::date('begin_work', 'Дата начала карьеры', isset($model) ? $model->begin_work->format('Y-m-d') : '')!!}
    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card card-primary card-outline card-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                           href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                           aria-selected="true">Основные</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-image-tab" data-toggle="pill"
                           href="#custom-tabs-three-image" role="tab" aria-controls="custom-tabs-three-image"
                           aria-selected="true">Фото и Сертификаты</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                         aria-labelledby="custom-tabs-three-home-tab">
                        <div class="row">
                            <div class="col-sm-10 col-12">
                                {!!Form::textarea('description', 'Описание')->attrs(['rows' => 10])->attrs(['class' => 'summernote'])!!}
                            </div>
                            <div class="col-sm-2 col-12">

                                {!! Form::select('hidden', 'Скрыто', \App\Models\Slider::getHiddenArray()) !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-image" role="tabpanel"
                         aria-labelledby="custom-tabs-three-image-tab">

                        <div class="row">
                            <div class="col-sm-2">
                                @if (isset($model) && $model->getFirstMedia('specialist_photo') && $src = $model->getFirstMedia('specialist_photo')->getUrl('thumb-admin'))
                                    <img src="{{$src}}">
                                @endif
                            </div>
                            <div class="col-sm-8">
                                {!! Form::file('specialist_photo', 'Фото специалиста') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="document">Сертификаты</label>
                                    <div class="needsclick dropzone" id="document-dropzone">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.col -->
</div>

@section('js')
    <script>
        var uploadedDocumentMap = {};

        Dropzone.options.documentDropzone = {
            url: '{{ route('admin.specialists.storeMedia') }}',
            //method: 'put',
            //paramName: 'media',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            //autoProcessQueue: false,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="certificate[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove();
                var name = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="certificate[]"][value="' + name + '"]').remove()
            },
            init: function () {
                        @if(isset($model) && $model->certificate)
                var files = {!! json_encode($model->certificate) !!};
                var filePath = [
                    @foreach($model->certificate as $media)
                        "{!! $media->getUrl('thumb-admin') !!}",
                    @endforeach
                ];
                for (var i in files) {
                    var file = files[i];
                    this.options.addedfile.call(this, file);
                    this.options.thumbnail.call(this, file, filePath[i]);
                    file.previewElement.classList.add('dz-complete');
                    $('form').append('<input type="hidden" name="certificate[]" value="' + file.file_name + '">')
                }
                @endif
                    this.on("processing", function (file) {
                    this.options.url = "{{ route('admin.specialists.storeMedia') }}";
                });
            }
        }
    </script>
@stop