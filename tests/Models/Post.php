<?php

namespace Sagor110090\Comments\Tests\Models;

use Sagor110090\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasComments;

    protected $guarded = [];
}
