<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //Table Name
  // protected $table = 'posts';

  // Primary Key
  // public $primaryKey = 'id';

  // Timestamps
  // public $timestamps = true;

  protected $fillable = ['title', 'body'];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = str_slug($value);
  }

  public function getUrlAttribute() {
    return route('posts.show', $this->id);
  }

  public function getCreatedDateAttribute() {
    return $this->created_at->format("d-M-Y");
  }
}