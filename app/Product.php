<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Cart;
use App\User;
use App\Category;
use App\Subcategory;


class Product extends Model
{

    protected $fillable = ['name', 'description', 'price','avatar','category_id', 'stock','promo'];
    protected $guarded = [];


    public function usuarioss()
    {
      return $this->belongsTo(User::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function damesubcategory()
    {
      return $this->hasOneThrough(Subcategory::class, Category::class);
    }

    public function dameSubategoriaId()
    {
      if($this->category_id){
        $categoria = Category::find($this->category_id);
         $subcatId =  $categoria->sub_category_id;
        return $subcatId;
      }
      return 'Sin Id de Categoria';
    }

    public function dameCategoria()
    {
      if($this->category_id){
        $categoria = Category::find($this->category_id);
        return $categoria->name;
      }
      return 'Sin Categoria';
    }

    public function dameSubCategoria()
    {
      if($this->category_id){
        $categoria = Category::find($this->category_id);
        $subcategoria =  $categoria->sub_category_id;
        $subcategoria  = Subcategory::find($subcategoria);
        return $subcategoria->name;
      }
      return 'Sin Subcategoria';
    }

}
