<?php

use App\Models\Category;
use App\Models\Page;
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