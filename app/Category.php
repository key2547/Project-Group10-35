<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Category extends Model
{
    protected $primaryKey = 'id';
    public function service(){
        return $this->hasMany(Service::class,'category_id');
    }
}
