<?php
class ProductController extends Controller{
    public function index(){
        // echo "This is index of ProductController ";

        $this->load->loadview('product.index');
    }
    public function create(){
        echo "This is create of ProductController ";
    }
        public function store(){
        echo "This is store of ProductController ";
    }
    
    public function edit(){
        echo "This is edit of ProductController ";
    }
    
    public function update(){
        echo "This is update of ProductController ";
    }

    public function show(){
        echo "This is show of ProductController ";
    }
    public function destroy(){
        echo "This is destroy of ProductController ";
    }
}
?>