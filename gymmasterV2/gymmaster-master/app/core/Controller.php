<?php

    trait Controller {
        public function view($name) {
            $filename = "../app/views/" . $name . ".view.php";
            if(!file_exists($filename)) {
                $filename = "../app/views/404.view.php";
            }
            require $filename;
        }
    }
