<?php

namespace App\models;

use App\traits\HiddenInterface;
use App\traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Slider
 * @package App\models
 *
 * @property int $id
 * @property string $name
 * @property string $end_show
 * @property integer $hidden
 */
class Slider extends Model implements HiddenInterface, HasMedia, Sortable
{
    use HiddenTrait, HasMediaTrait, SortableTrait;

    protected $fillable = ['name', 'end_show', 'hidden'];

    protected $dates = ['end_show'];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb-admin')
            ->width(100)
            ->height(100);
    }

    /**
     * @return string
     */
    public function getEndShow()
    {
        return $this->end_show ? $this->end_show->format('Y-m-d') : '';
    }
}
