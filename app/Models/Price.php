<?php

namespace App\Models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * App\Models\Price
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $value
 * @property int $service_id
 * @property int $hidden
 * @property int $order_column
 * @property int $show_on_service
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price ordered($direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereShowOnService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereValue($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price showOnService()
 */
class Price extends Model implements HiddenInterface, Sortable
{
    use HiddenTrait, SortableTrait;

    protected $fillable = [
        'name',
        'description',
        'value',
        'hidden',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
