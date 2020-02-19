<?php

use App\Models\Category;
use App\Models\Page;
use App\Models\Question;
use App\Models\Service;
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