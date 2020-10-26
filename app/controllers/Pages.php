<?php

    class Pages extends Controller
    {
        public function __construct()
        {
            // load the example Post model
            $this->postModel = $this->model('Post');
        }

        // Pages is the default controller and index is the default method
        public function index()
        {
            $posts = $this->postModel->getPosts();

            $data = [
                'title' => 'Welcome',
                'posts' => $posts,
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $data = [
                'title' => 'About Us',
            ];

            $this->view('pages/about', $data);
        }
    }
