<?php

namespace App\Models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class ServicePrice extends Model implements HiddenInterface, Sortable
{
    use HiddenTrait, SortableTrait;

    protected $fillable = [
        'name',
        'description',
        'value',
        'hidden',
        'service_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'service_prices';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
