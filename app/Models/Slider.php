<?php

namespace App\models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Slider
 *
 * @package App\models
 * @property int $id
 * @property string $name
 * @property string $end_show
 * @property integer $hidden
 * @property int $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider ordered($direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereEndShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\models\Slider whereUpdatedAt($value)
 * @mixin \Eloquent
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
