<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
  protected $fillable = [
      'nameCourse', 'description', 'price', 'image', 'publicated'
  ];
}
