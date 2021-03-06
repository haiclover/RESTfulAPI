<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class CategoryProductController extends ApiController
{

    /**
     * CategoryProductController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Category $category)
    {
        $products = $category->products;
        return $this->showAll($products);
    }
}
