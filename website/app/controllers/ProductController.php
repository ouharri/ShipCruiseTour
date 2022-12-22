<?php
class ProductController
{
    public function index()
    {
        $db = new product();
        $data['products'] = $db->getAllProducts();
        View::load('jewellery/jewellery', $data);
    }
    public function detail($id)
    {
        $db = new product();
        $data['product'] = $db->getRow($id);
        View::load('jewellery/detail', $data);
    }
}

