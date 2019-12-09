<?php
use controller\Controller as Controller;

class User_Controller extends Controller
 {
     public function index()
     {
         $data = $this->model('user')->data();
         $data['data'] = $this->view('content',$data);
         echo $this->view('home',$data);
     }

     public function store()
     {
        echo "this is store method hello blahana";
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