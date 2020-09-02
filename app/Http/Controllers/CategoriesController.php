<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private $entity = null;

    public function __construct(Categories $category){
        $this->entity = $category;
    }

    public function getCategories(){
        return $this->entity->all();
    }
}
