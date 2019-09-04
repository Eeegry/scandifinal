<?php
include 'Controller.php';
require_once 'mvc/views/View.php';

class index extends Controller{
  public function __construct() 
  {
    $this->view = new View();
    
    $this->render_view('pages/index.php');
  }
}