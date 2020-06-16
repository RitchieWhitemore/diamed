<?php


namespace App\Models;


use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Promotion extends Model implements HiddenInterface, HasMedia
{
    use HiddenTrait, HasMediaTrait, SortableTrait;

    protected $fillable = ['name', 'begin_show', 'end_show', 'hidden'];

    protected $dates = ['begin_show', 'end_show'];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb-admin')
            ->width(100)
            ->height(100);

        $this->addMediaConversion('promo-small')
            ->width(640)
            ->height(640);
    }

    /**
     * @return string
     */
    public function getBeginShow()
    {
        return $this->begin_show ? $this->begin_show->format('Y-m-d') : '';
    }

    /**
     * @return string
     */
    public function getEndShow()
    {
        return $this->end_show ? $this->end_show->format('Y-m-d') : '';
    }

    public function getFullName()
    {
        return $this->name . '. Действует с ' . $this->begin_show->format('d.m.y') . ' по ' . $this->end_show->format('d.m.y');
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
