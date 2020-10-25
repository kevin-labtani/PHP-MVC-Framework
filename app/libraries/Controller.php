<?php

    // Base Controller
    // loads the models and views
    class Controller
    {
        // load model
        public function model($model)
        {
            // require model file
            require_once "../app/models/{$model}.php";

            // instantiate the model
            return new $model();
        }

        // load view
        public function View($view, $data = [])
        {
            // check for view file and require it
            if (file_exists("../app/views/{$view}.php")) {
                require_once "../app/views/{$view}.php";
            } else {
                // view doesn't exist
                die('View does not exist');
            }
        }
    }
