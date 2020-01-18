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
  public $timestamps = true;

  protected $fillable = ['title', 'body'];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = str_slug($value);
  }

  public function getUrlAttribute() {
    return route('posts.show', $this->slug);
  }

  public function getCreatedDateAttribute() {
    return $this->created_at->format("d-M-Y");
  }

  public function getBodyHtmlAttribute(){
    // return $this->bodyHtml();
    return \Parsedown::instance()->text($this->body);
  }

  // public function getExcerptAttribute(){
  //   return str_limit(strip_tags($this->bodyHtml()), 250);
  // }

  // private function bodyHtml(){
  //   return \Parsedown::instance()->text($this->body);
  // }


}