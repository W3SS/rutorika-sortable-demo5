<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\MorphToSortedManyTrait;

class Author extends Model
{
    use MorphToSortedManyTrait;

    public function videos()
    {
        return $this->morphedBySortedMany('App\Video', 'authorable', 'position');
    }

    public function albums()
    {
        return $this->morphedBySortedMany('App\Album', 'authorable', 'position');
    }
}
