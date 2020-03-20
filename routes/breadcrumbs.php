<?php

use App\Models\Category;
use App\Models\Page;
use App\Models\Price;
use App\Models\Question;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServicePrice;
use App\models\Slider;
use App\models\Specialist;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;

// Admin

Breadcrumbs::register('admin.home', function (Crumbs $crumbs) {
    $crumbs->push('Admin', route('admin.home'));
});

// Admin - Category
Breadcrumbs::register('admin.categories.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Категории', route('admin.categories.index'));
});

Breadcrumbs::register('admin.categories.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.index');
    $crumbs->push('Добавить категорию', route('admin.categories.create'));
});

Breadcrumbs::for('admin.categories.show', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.categories.index');
    $crumbs->push($category->name, route('admin.categories.show', $category));
});

Breadcrumbs::for('admin.categories.edit', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.categories.index');
    $crumbs->push('Редактирование: ' . $category->name, route('admin.categories.edit', $category));
});

// Admin - Page
Breadcrumbs::register('admin.pages.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Страницы', route('admin.pages.index'));
});

Breadcrumbs::register('admin.pages.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.pages.index');
    $crumbs->push('Добавить страницу', route('admin.pages.create'));
});

Breadcrumbs::for('admin.pages.show', function (Crumbs $crumbs, Page $page) {
    $crumbs->parent('admin.pages.index');
    $crumbs->push($page->name, route('admin.pages.show', $page));
});

Breadcrumbs::for('admin.pages.edit', function (Crumbs $crumbs, Page $page) {
    $crumbs->parent('admin.pages.index');
    $crumbs->push('Редактирование: ' . $page->name, route('admin.pages.edit', $page));
});

// Admin - Slider
Breadcrumbs::register('admin.sliders.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Слайдер', route('admin.sliders.index'));
});

Breadcrumbs::register('admin.sliders.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.sliders.index');
    $crumbs->push('Добавить слайд', route('admin.sliders.create'));
});

Breadcrumbs::for('admin.sliders.show', function (Crumbs $crumbs, Slider $slider) {
    $crumbs->parent('admin.sliders.index');
    $crumbs->push($slider->name, route('admin.sliders.show', $slider));
});

Breadcrumbs::for('admin.sliders.edit', function (Crumbs $crumbs, Slider $slider) {
    $crumbs->parent('admin.sliders.index');
    $crumbs->push('Редактирование: ' . $slider->name, route('admin.sliders.edit', $slider));
});

// Admin - Specialist
Breadcrumbs::register('admin.specialists.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Специалисты', route('admin.specialists.index'));
});

Breadcrumbs::register('admin.specialists.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.specialists.index');
    $crumbs->push('Добавить специалиста', route('admin.specialists.create'));
});

Breadcrumbs::for('admin.specialists.show', function (Crumbs $crumbs, Specialist $specialist) {
    $crumbs->parent('admin.specialists.index');
    $crumbs->push($specialist->last_name, route('admin.specialists.show', $specialist));
});

Breadcrumbs::for('admin.specialists.edit', function (Crumbs $crumbs, Specialist $specialist) {
    $crumbs->parent('admin.specialists.index');
    $crumbs->push('Редактирование: ' . $specialist->last_name, route('admin.specialists.edit', $specialist));
});

// Admin - Question
Breadcrumbs::register('admin.questions.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Вопросы', route('admin.questions.index'));
});

Breadcrumbs::register('admin.questions.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.questions.index');
    $crumbs->push('Добавить вопрос', route('admin.questions.create'));
});

Breadcrumbs::for('admin.questions.show', function (Crumbs $crumbs, Question $question) {
    $crumbs->parent('admin.questions.index');
    $crumbs->push($question->id, route('admin.questions.show', $question));
});

Breadcrumbs::for('admin.questions.edit', function (Crumbs $crumbs, Question $question) {
    $crumbs->parent('admin.questions.index');
    $crumbs->push('Редактирование: ' . $question->id, route('admin.questions.edit', $question));
});

// Admin - Service
Breadcrumbs::register('admin.services.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Услуги', route('admin.services.index'));
});

Breadcrumbs::register('admin.services.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.services.index');
    $crumbs->push('Добавить услугу', route('admin.services.create'));
});

Breadcrumbs::for('admin.services.show', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.index');
    $crumbs->push($service->name, route('admin.services.show', $service));
});

Breadcrumbs::for('admin.services.edit', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.index');
    $crumbs->push('Редактирование: ' . $service->name, route('admin.services.edit', $service));
});

// Admin - Price
Breadcrumbs::register('admin.services.prices.index', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены', route('admin.services.index', $service));
});

Breadcrumbs::register('admin.services.prices.create', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены', route('admin.services.prices.index', [$service]));
    $crumbs->push('Добавить цену', route('admin.services.prices.create', $service));
});

Breadcrumbs::for('admin.services.prices.show', function (Crumbs $crumbs, Service $service, Price $price) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены', route('admin.services.prices.index', [$service]));
    $crumbs->push($price->name, route('admin.services.prices.show', ['service' => $service, 'price' => $price]));
});

Breadcrumbs::for('admin.services.prices.edit', function (Crumbs $crumbs, Service $service, Price $price) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены', route('admin.services.prices.index', [$service]));
    $crumbs->push('Редактирование: ' . $price->name,
        route('admin.services.edit', ['service' => $service, 'price' => $price]));
});

// Admin - Price on Service
Breadcrumbs::register('admin.services.service_prices.index', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены', route('admin.services.index', $service));
});

Breadcrumbs::register('admin.services.service_prices.create', function (Crumbs $crumbs, Service $service) {
    $crumbs->parent('admin.services.show', $service);
    $crumbs->push('Цены на странице услуг', route('admin.services.service_prices.index', [$service]));
    $crumbs->push('Добавить цену', route('admin.services.service_prices.create', $service));
});

Breadcrumbs::for('admin.services.service_prices.show',
    function (Crumbs $crumbs, Service $service, ServicePrice $service_price) {
        $crumbs->parent('admin.services.show', $service);
        $crumbs->push('Цены на странице услуг', route('admin.services.service_prices.index', [$service]));
        $crumbs->push($service_price->name,
            route('admin.services.service_prices.show', ['service' => $service, 'service_price' => $service_price]));
    });

Breadcrumbs::for('admin.services.service_prices.edit',
    function (Crumbs $crumbs, Service $service, ServicePrice $service_price) {
        $crumbs->parent('admin.services.show', $service);
        $crumbs->push('Цены на странице услуг', route('admin.services.service_prices.index', [$service]));
        $crumbs->push('Редактирование: ' . $service_price->name,
            route('admin.services.edit', ['service' => $service, 'service_price' => $service_price]));
    });

// Admin - Review
Breadcrumbs::register('admin.reviews.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Отзывы', route('admin.reviews.index'));
});

Breadcrumbs::register('admin.reviews.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.reviews.index');
    $crumbs->push('Добавить отзыв', route('admin.reviews.create'));
});

Breadcrumbs::for('admin.reviews.show', function (Crumbs $crumbs, Review $review) {
    $crumbs->parent('admin.reviews.index');
    $crumbs->push($review->title, route('admin.reviews.show', $review));
});

Breadcrumbs::for('admin.reviews.edit', function (Crumbs $crumbs, Review $review) {
    $crumbs->parent('admin.reviews.index');
    $crumbs->push('Редактирование: ' . $review->title, route('admin.reviews.edit', $review));
});
