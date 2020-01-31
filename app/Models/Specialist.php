<?php

namespace App\models;

use App\traits\HiddenInterface;
use App\traits\HiddenTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Specialist
 *
 * @package App\models
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $description
 * @property Media[] $certificate
 * @property Carbon|null $begin_work
 * @property int $order_column
 * @property int $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist ordered($direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereBeginWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Specialist whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Specialist extends Model implements Sortable, HiddenInterface, HasMedia
{
    use SortableTrait, HiddenTrait, HasMediaTrait;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'description',
        'begin_work',
        'hidden'
    ];

    protected $dates = ['begin_work'];

    public function certificate()
    {
        return $this->morphMany(Media::class, 'model')->where('collection_name', '=', 'certificate');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb-admin')
            ->width(100)
            ->height(100);
    }

    /**
     * @return string
     */
    public function getBeginWork()
    {
        return $this->begin_work ? $this->begin_work->format('d-m-Y') : '';
    }

    public function getFullNameAttribute()
    {
        $result = '';

        if ($this->last_name) {
            $result .= $this->last_name;
        }

        if ($this->first_name) {
            $result .= ' ' . $this->first_name;
        }

        if ($this->middle_name) {
            $result .= ' ' . $this->middle_name;
        }

        return $result;
    }

    /**
     * @param $attribute
     * @param Request $request
     * @param $collectionName
     */
    public function uploadImage($attribute, Request $request, $collectionName)
    {
        if (isset($request[$attribute])) {
            $fileName = Str::before($request->file($attribute)->getClientOriginalName(),
                '.' . $request->file($attribute)->getClientOriginalExtension());
            $fileName = Str::slug($fileName);

            $this->clearMediaCollectionExcept($collectionName, $this->getFirstMedia());
            $this->addMediaFromRequest($attribute)
                ->preservingOriginal()
                ->usingName($fileName)
                ->usingFileName($fileName . '.' . $request->file($attribute)->getClientOriginalExtension())
                ->toMediaCollection($collectionName);
        }
    }
}
