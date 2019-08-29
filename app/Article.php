<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    use Search\Searchable;

    protected $casts = [
        'tags' => 'json',
    ];
}
