<?php

class View {
  public function __construct() {
    
  }
  public function render($view_name)
  {
    include "{$view_name}";
  }
}