<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price'
    ];

    public function setImageAttribute($value){

        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveImage($value,'images'); 
        }
        
    
    }

    public function getImageAttribute($value){
        return asset($value);
    }
}
