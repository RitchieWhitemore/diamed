<?php

namespace App\Models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property string|null $menu_name
 * @property string|null $text
 * @property string $slug
 * @property int $hidden
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereMenuName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\models\Specialist[] $specialists
 * @property-read int|null $specialists_count
 * @property string|null $note
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServicePrice[] $servicePrices
 * @property-read int|null $service_prices_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service specialistsPublic()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Service whereNote($value)
 */
class Service extends Model implements HiddenInterface
{
    use Sluggable, HiddenTrait, \App\Traits\Specialist;

    protected $fillable = [
        'name',
        'menu_name',
        'text',
        'note',
        'hidden',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function shortPrices()
    {
        return $this->morphMany(ShortPrice::class, 'short_prices');
    }

    /**
     * @return ShortPrice[]
     */
    public function getPublicShortPrices()
    {
        return $this->shortPrices()->notHidden()->ordered()->get();
    }

    public function getSEOTitle(): string
    {
        return $this->meta_title ?? $this->name;
    }

    public function getSEODescription(): string
    {
        return $this->meta_description ?? '';
    }

    public function getSEOKeywords(): string
    {
        return $this->meta_keywords ?? '';
    }
}
