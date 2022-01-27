<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Service extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'detail','image','category_id'];   
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
