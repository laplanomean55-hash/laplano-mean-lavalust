<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller {

    public function __construct() {
        parent::__construct();

        $this->call->model('ProductModel');
    }

    public function index() {
        $data['products'] = $this->ProductModel->all();

        return $this->call->view('products/index', $data);
    }

    public function create() {
        return $this->call->view('products/create');
    }

    public function store() {

        $data = [
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        ];

        $this->ProductModel->create($data);

        redirect('products');
    }

    public function edit($id) {

        $data['product'] = $this->ProductModel->find($id);

        return $this->call->view('products/edit', $data);
    }

    public function update($id) {

        $data = [
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        ];

        $this->ProductModel->update($id, $data);

        redirect('products');
    }

    public function delete($id) {

        $this->ProductModel->delete($id);

        redirect('products');
    }

}
?>