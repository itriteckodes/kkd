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
        'price',
        'category_id',
        'stock'
    ];

    public function setImageAttribute($value){

        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveResizedImage($value,'images',263,394); 
        }
        
    
    }
    
    public function getImageAttribute($value){
        return asset($value);
    }

    
    public function category(){
        return $this->belongsTo(Category::class);
    } 
    
}
