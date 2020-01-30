<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    public function getCategory(){
//        return $category = Category::where('id', $this->category_id) -> first();
////        return $category = find($this->category_id);
////        dd($category);
//    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
