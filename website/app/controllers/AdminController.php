<?php

class AdminController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        redirect::session();
        $db = new product();
        $data['products'] = $db->getAllProducts();
        View::load('jewellery/admin/index', $data);
    }

    //add new product - view add page
    public function add()
    {
        redirect::session();
        View::load('jewellery/admin/add');
    }

    /**
     * @throws Exception
     */
    //get data from form and store product info
    public function store()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'name' => $name,
                'price' => $price,
                'description' => $description,
                'qty' => $qty,
                'img' => file_get_contents($_FILES['image']['tmp_name']),
            );
            $db = new product();
            if ($db->insert($data))
            {
                $data['success'] = "Product added successfully";
                $data['products'] = $db->getAllProducts();
                View::load('jewellery/admin/add', $data);
            } else {
                $data['error'] = "Error ";
                View::load('jewellery/admin/add', $data);
            }

        } else {
            View::load('jewellery/admin/add');
        }
    }

    /**
     * @throws Exception
     */
    public function edit($id)
    {
        $db = new product();
        if ($db->getRow($id)) {
            $data['row'] = $db->getRow($id);
            View::load('jewellery/admin/edit', $data);
        } else {
            echo "Error";
        }
    }

    /**
     * @throws Exception
     */
    public function update($id)
    {
        if (isset($_POST['submit']))
        {
            extract($_POST);
            $data = !empty($_FILES['image']['tmp_name']) ?
                array(
                    'name' => $name,
                    'price' => $price,
                    'description' => $description,
                    'qty' => $qty,
                    'img' => file_get_contents($_FILES['image']['tmp_name']),
                ) :
                array(
                    'name' => $name,
                    'price' => $price,
                    'description' => $description,
                    'qty' => $qty,
                );
            $db = new product();
            if ($db->update($id, $data))
            {
                $data['success'] = "Product added successfully";
                $data['products'] = $db->getAllProducts();
            }
            else
            {
                $data['error'] = "Error";
            }
            View::load('jewellery/admin/add', $data);

        }
        else
        {
            View::load('jewellery/admin/add');
        }
    }

    /**
     * @throws Exception
     */
    //delete product - view delete page
    public function delete($id)
    {
        $db = new product();
        if ($db->delete($id))
        {
            $data['success'] = "Product deleted successfully";
            $data['products'] = $db->getAllProducts();
            redirect('admin/index', $data);
        } else
        {
            echo "Error";
        }
    }
}