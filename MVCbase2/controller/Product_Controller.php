<?php

use controller\Controller as Controller;

class Product_Controller extends Controller
{
    public function index()
     {
       var_dump($this->model('user'));
       $this->controller('user')->store();
     }

     public function store()
     {
        echo "this is store method";
     }

     public function show($id)
     {
         echo "this is show method";
     }

     public function create()
     {
         echo "this is create method";
     }
     
     public function update($id)
     {
         echo "this is update method";
     }
}

?>