<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class actuality extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','content','picture_url','link_url'];

}
