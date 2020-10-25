<?php

    class Pages extends Controller
    {
        public function __construct()
        {
        }

        // Pages is the default controller and index is the default method
        public function index()
        {
            $data = [
                'title' => 'Welcome',
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $this->view('pages/about');
        }
    }
