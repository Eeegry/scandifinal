<?php

class View {
  public function __construct() {
    
  }
  public function render($view_name, $data)
  {
    include "{$view_name}";
  }

}