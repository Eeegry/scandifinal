<?php
include 'mvc/views/View.php';
include 'mvc/models/Model.php';
include 'classes/Product.php';
$model = new Model();
class Controller {

  public $view;
  public $model;
  public function __construct($view)
  {
    $this->view = $view;
    $this->model = $model;
  }

  public function render_view($viewName)
  {
    $this->view->render($viewName);
  }

  
  
}

?>