<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    use HasFactory;
    
    protected $primaryKey='gallery_id';

    public function category(){
      return $this->belongsTo('App\Models\GalleryCategory','galcate_id','galcate_id');
    }

    public function creator(){
      return $this->belongsTo('App\Models\User','gallery_creator','id');
    }
}
