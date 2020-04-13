<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     *
     * @var array
     *
     */
    public $fillable = [
        'id',
        'title',
        'subtitle',
        'short_description',
        'post_body',
        'is_published',
        'posted_at',
    ];
}
