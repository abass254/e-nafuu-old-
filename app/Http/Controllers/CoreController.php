<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CoreController extends Controller
{
    //Category Functionalities
    public function getCategories(){
        $categories = Category::all();
        return $categories;
        //return view('category.list', compact('categories'));
    }
}
