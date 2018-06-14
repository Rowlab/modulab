<?php
class App
{
    private $controller = 'admin';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $route = $this->getParams();

        if (file_exists(ROOT . 'app/Controllers/' . $route[0] . '.php')) {
            $this->controller = $route[0];
            unset($route[0]);
        }

        require_once ROOT . 'app/Controllers/' . $this->controller . '.php';

        if (isset($route[1])) {
            if (method_exists($this->controller, $route[1])) {
                $this->method = $route[1];
                unset($route[1]);
            }
        }

        $this->controller = new $this->controller;

        $this->params = $route ? array_values($route) : [];

        call_user_func_array([ $this->controller, $this->method ], $this->params);
    }

    private function getParams()
    {
        if (isset($_GET['route'])) {
            return explode('/', filter_var(rtrim($_GET['route'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
