<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OptionSize;
use App\Models\OptionToping;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $category;
    private $optionSize;
    private $optionToping;
    public function __construct(Product $product, Category $category, OptionSize $optionSize, OptionToping $optionToping)
    {
        $this->product = $product;
        $this->category = $category;
        $this->optionSize = $optionSize;
        $this->optionToping = $optionToping;
    }
    public function show()
    {
        $data = $this->product->latest()->paginate(8);
        $dataCategory = $this->category->all();
        return view('home.index', [
            'data' => $data,
            'dataCategory' => $dataCategory,
        ]);
    }
    public function menu($name)
    {
        $data = $this->product->where('category','like', '%'.$name.'%')->latest()->paginate(8);
        $dataCategory = $this->category->all();
        return view('home.index', [
            'data' => $data,
            'dataCategory' => $dataCategory,
        ]);
    }
    public function productDetail($id)
    {
        $dataProduct = $this->product->find($id);
        $dataOptionSize = $this->optionSize->all();
        $dataOptionToping = $this->optionToping->all();
        return view('home.product', [
            'dataProduct' => $dataProduct,
            'dataOptionSize' => $dataOptionSize,
            'dataOptionToping' => $dataOptionToping,
        ]);
    }
    public function index()
    {
        $data = $this->product->latest()->paginate(10);
        return view('admin.product.product_list', [
            'data' => $data,
        ]);
    }
}
