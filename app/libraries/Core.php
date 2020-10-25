<?php

    // Core Class
    // Create URL and loads core controller
    // URL Format - /controller/method/params
    class Core
    {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            print_r($this->getUrl());

            $url = $this->getUrl();

            // look for the right controller from the controllers folder
            // nb: folder path is defined from public index.php
            if ($url && file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
                $this->currentController = ucwords($url[0]);
                // unset the 0 index from the array
                unset($url[0]);
            }

            // require the right controller
            require_once "../app/controllers/{$this->currentController}.php";

            // instantiate controller class
            $this->currentController = new $this->currentController();
        }

        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url;
            }
        }
    }
