<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\BelongsToSortedManyTrait;

/**
 * Post
 *
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Post extends Model {
    
    use BelongsToSortedManyTrait;

    public function tags()
    {
        return $this->belongsToSortedMany('\App\Tag');
    }
}