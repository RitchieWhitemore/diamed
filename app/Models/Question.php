<?php

namespace App\Models;

use App\Traits\HiddenInterface;
use App\Traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * App\Models\Question
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question query()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question ordered($direction = 'asc')
 * @property int $id
 * @property string $question
 * @property string|null $answer
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property int $order_column
 * @property int $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereUpdatedAt($value)
 */
class Question extends Model implements HiddenInterface, Sortable
{
    use HiddenTrait, SortableTrait;

    protected $fillable = [
        'question',
        'name',
        'email',
        'phone',
    ];
}
