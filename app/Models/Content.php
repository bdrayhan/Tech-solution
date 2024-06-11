<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model{
    use HasFactory;

    protected $primaryKey='content_id';

    public function pageInfo(){
      return $this->belongsTo('App\Models\Page','page_id','page_id');
    }
}
