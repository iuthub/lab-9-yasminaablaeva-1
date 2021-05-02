<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this ->belongsTo('App\Post', 'post_id');
    }
}
