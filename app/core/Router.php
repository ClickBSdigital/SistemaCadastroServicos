<?php
class Router {
  private $routes = [];
  
  public function add($route, $action) {
      $this->routes[$route] = $action;
  }
  
  public function dispatch($url) {
      if (array_key_exists($url, $this->routes)) {
          list($controller, $method) = explode('@', $this->routes[$url]);
          $controller = new $controller();
          $controller->$method();
      } else {
          echo "Página não encontrada.";
      }
  }
}
?>