<?php

    // this is an example model; not a part of the framework
    class Post
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }
    }
