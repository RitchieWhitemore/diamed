<?php


namespace App\Models;

use App\traits\HiddenInterface;
use App\traits\HiddenTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * @package App\Models
 * @property string $name
 * @property string $menu_name
 * @property string $slug
 * @property string $text
 * @property string $meta_title
 * @property string $meat_description
 * @property string $meta_keywords
 * @property integer $hidden
 * @property int $id
 * @property int $category_id
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMenuName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page notHidden()
 */
class Page extends Model implements HiddenInterface
{
    use Sluggable, HiddenTrait;

    protected $fillable = [
        'category_id',
        'name',
        'menu_name',
        'text',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryName()
    {
        return '';
    }
}