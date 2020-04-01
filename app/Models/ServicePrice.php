<?php

namespace App\Models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * App\Models\ServicePrice
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $value
 * @property int $service_id
 * @property int $hidden
 * @property int $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice ordered($direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServicePrice whereValue($value)
 * @mixin \Eloquent
 */
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
