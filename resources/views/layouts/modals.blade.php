<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Свяжитесь с нами</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-text">
                    Мы свяжемся с вами в ближайшее время в часы работы клинники с 8:00 до 19:00. Пожалуйста, заполните
                    обязательные поля.
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Как вы узнали о нас</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Опишите ваш запрос"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span></span>
                            Я согласен с вашими правилами
                            и условиями <a href="#">на обработку
                                персональных данных</a>.
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Отправить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewModalLabel">Оставить отзыв</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Телефон">
                    </div>

                    <div class="form-group form__rating-wrapper">
                        <input class="form__rating" type="radio" name="rating" value="5" id="form-rating-5">
                        <label class="form__rating-ico far fa-star" for="form-rating-5"></label>
                        <input class="form__rating" type="radio" name="rating" value="4" id="form-rating-4">
                        <label class="form__rating-ico far fa-star" for="form-rating-4"></label>
                        <input class="form__rating" type="radio" name="rating" value="3" id="form-rating-3">
                        <label class="form__rating-ico far fa-star" for="form-rating-3"></label>
                        <input class="form__rating" type="radio" name="rating" value="2" id="form-rating-2">
                        <label class="form__rating-ico far fa-star" for="form-rating-2"></label>
                        <input class="form__rating" type="radio" name="rating" value="1" id="form-rating-1">
                        <label class="form__rating-ico far fa-star" for="form-rating-1"></label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Заголовок отзыва">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Текст" rows="10"></textarea>
                    </div>
                    <div class="form-group form__file-input-wrapper">
                        <label>
                            <input id="file-review" type="file" class="form-control" name="file">
                            <span class="form__file-name">Прикрепить файл</span>
                            <span class="form__file-button">Выбрать</span>
                        </label>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Оставить отзыв</button>
            </div>
        </div>
    </div>
</div>