<?php

namespace App\Models;

use App\traits\HiddenInterface;
use App\traits\HiddenTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $title
 * @property string $text
 * @property int $rating
 * @property int $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review notHidden()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Review whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Review extends Model implements HiddenInterface
{
    use HiddenTrait;

    protected $fillable = [
        'name',
        'email',
        'title',
        'text',
        'rating',
    ];

    public function uploadAudio(UploadedFile $audio)
    {
        $name = $audio->getClientOriginalName();
        $path = $audio->storeAs('public/audio', $name);
        $this->audio = $path;
    }
}
