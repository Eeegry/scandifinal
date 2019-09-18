<?php
include 'mvc/views/View.php';
include 'mvc/models/Model.php';
include 'classes/Product.php';

class Controller {

  public $view;
  public $model;

  
  public function __construct($view, $model)
  {
    $this->view = $view;
    $this->model = $model;
  }

  public function render_view($viewName, $data)
  {
    $this->view->render($viewName, $data);
  }

}

?>