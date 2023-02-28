<?php

/*************************\
 * -   front-end controller  -
 * \*************************/
class app
{
    protected string $controller = "HomeController";
    protected string $action = "index";
    protected array $param = [];

    public function __construct()
    {
        $this->prepareURL();
        $this->render();
    }

    /****************************************************\
     * -  extract controller and method and all parameters  -
     * -                    @return void                    -
     * \****************************************************/
    private function prepareURL(): void
    {
        $url = $_SERVER['REQUEST_URI'];
        if (!empty($url)) {
            $url = trim($url, '/');
            $url = explode('/', $url);
            // define the controller
            $this->controller = (isset($url[0]) && !empty($url[0])) ? ucwords($url[0]) . "Controller" : "HomeController";
            // define the action
            $this->action = (isset($url[1]) && !empty($url[1])) ? $url[1] : "index";
            //define the parameter
            unset($url[0], $url[1]);
            $this->param = !empty($url) ? array_values($url) : [];
        }
    }

    private function render(): void
    {
        if (class_exists($this->controller)) {
            $controller = new $this->controller;
            if (method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->param);
            } else {
                echo ' this methode :' . $this->action . ' is not Exist';
            }
        } else {
            echo ' this controller :' . $this->controller . ' is not Exist';
        }
    }
}
