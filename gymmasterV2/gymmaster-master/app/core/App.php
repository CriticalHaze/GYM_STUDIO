<?php
class App {
    private $controller = 'home';
    private $method = 'index';

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    public function __construct() {
        // Parse the URL to determine the controller and method
        $url = $this->parseUrl();

        // Check if the "action" parameter is set to "index"
        if (isset($_GET['action']) && $_GET['action'] === 'index') {
            $this->controller = 'Index'; // Use the IndexController
            $this->method = 'index'; // Use the "index" method
        } else {
            // Check if the controller file exists, otherwise, set it to a default error controller
            $controllerName = '../app/controllers/' . ucfirst($url[0]) . 'Controller.php';
            if (file_exists($controllerName)) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            } else {
                $controllerName = '../app/controllers/_404Controller.php';
                $this->controller = '_404';
            }

            require $controllerName;
        }

        $controller = new $this->controller;

        // Check if a method is specified in the URL
        if (!empty($url[1]) && method_exists($controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Call the controller method and pass any remaining URL segments as arguments
        call_user_func_array([$controller, $this->method], $url);
    }
}
?>