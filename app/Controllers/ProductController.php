<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function delete($id)
    {
        $this->product->delete($id);
    }
    public function save()
    {
        $data=[
        'UPC' => $this->request->getVar('upc'),
        'name' => $this->request->getVar('name'),
        'quantity' => $this->request->getVar('quantity'),
        'price' => $this->request->getVar('price'),
        'expiry_date' => $this->request->getVar('expiry_date'),
        'created_at' => $this->request->getVar('created_at'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');
    }
    public function product($product)
    {
        echo $product;
    }
    public function badeth()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }
    public function index()
    {
        //
    }
}
