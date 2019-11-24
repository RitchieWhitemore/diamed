<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Category
 * @package App\Models
 *
 * @property string $name
 * @property string $menu_name
 * @property string $slug
 * @property integer $hidden
 */
class Category extends Model
{
    use Sluggable, NodeTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }

    const HIDDEN_NO = 0;
    const HIDDEN_YES = 1;

    protected $fillable = ['parent_id', 'name', 'menu_name', 'hidden', 'slug'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_categories';

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

    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }

    public static function getHiddenArray()
    {
        return [
            self::HIDDEN_NO => 'Нет',
            self::HIDDEN_YES => 'Да'
        ];
    }

    public function getHiddenAttribute($value)
    {
        return \Arr::get(Category::getHiddenArray(), $value);
    }

    public function getParentName()
    {
        return isset($this->parent) ? $this->parent->name : '';
    }
}