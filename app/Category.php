<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Subcategory;


class Category extends Model
{

  protected $table = 'categories';
  protected $fillable = ['name', 'imagen','sub_category_id'];
  protected $guarded = [];



  public function products(){

    return $this->hasMany(Product::class);
  }
  public function subcategory()
  {
    return $this->hasOne(Subcategory::class, 'sub_category_id');
  }

  public function dameSubCategoria()
  {
    if($this->sub_category_id){
      $subcategoria = Subcategory::find($this->sub_category_id);
      return $subcategoria->name;
    }
    return 'Sin Categoria';
  }
}
