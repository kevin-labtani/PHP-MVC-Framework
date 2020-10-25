<?php

    class Pages extends Controller
    {
        public function __construct()
        {
        }

        // Pages is the default controller and index is the default method
        public function index()
        {
        }

        public function about($id)
        {
            echo "this is about {$id}";
        }
    }
