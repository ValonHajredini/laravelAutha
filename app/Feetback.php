<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feetback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'name','comment', 'ratting',
    ];
}
