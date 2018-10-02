<?php
    class Pages extends Controller{
        private $postModel;

        public function __construct() {
            //Load Models here
        }

        public function index() {
            $data = [
                'title' => 'Welcome to DigiBoard'
            ];

            $this->loadView('index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About Me',
                'developer' => 'Christian Dimayacyac'
            ];
            $this->loadView('about', $data);
        }
    }
?>