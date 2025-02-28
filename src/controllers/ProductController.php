<?php
namespace src\controllers;

use AnkorFramework\App\Http\BaseController;
use AnkorFramework\App\Http\Response;
use src\services\ProductService;

class ProductController extends BaseController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        Response::view('dashboard/products/test.view');
    }

    public function create()
    {
        Response::view('dashboard/products/testcreate.view');
    }

    public function store()
    {
        Response::redirect('/products');
    }

    public function show($id)
    {
        Response::view('user/products/product.view', ['id' => $id]);
    }

}