<?php


namespace App\Traits;


trait Specialist
{
    public static function bootSpecialist()
    {
        static::deleting(function ($entity) {
            $entity->specialists()->detach();
        });
    }

    public function specialists()
    {
        return $this->morphToMany(\App\Models\Specialist::class, 'attracted_specialist');
    }

    public function specialistListIds()
    {
        return $this->specialists()->pluck('id')->toArray();
    }

    public function scopeSpecialistsPublic()
    {
        return $this->specialists()->notHidden()->orderBy('order_column');
    }
}
