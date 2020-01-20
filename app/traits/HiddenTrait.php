<?php


namespace App\traits;


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
}