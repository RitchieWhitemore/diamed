<?php


namespace App\traits;


use Illuminate\Database\Eloquent\Builder;

trait HiddenTrait
{
    public static function getHiddenArray()
    {
        return [
            self::HIDDEN_NO => 'Нет',
            self::HIDDEN_YES => 'Да'
        ];
    }

    public function getHiddenValue()
    {
        return \Arr::get(self::getHiddenArray(), $this->getAttribute('hidden'));
    }

    public function scopeNotHidden(Builder $query)
    {
        return $query->where('hidden', self::HIDDEN_NO);
    }
}