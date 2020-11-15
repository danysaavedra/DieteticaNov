<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
use App\Category;
class Subcategory extends Model
{
  protected $table = 'subcategories';
protected $fillable = ['name', 'imagen'];
protected $guarded = [];

public function categorias()
{
  return $this->hasMany(Category::class, 'sub_category_id');
}
}
