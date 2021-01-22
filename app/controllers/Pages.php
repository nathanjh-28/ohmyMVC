<?php

class Pages extends Controller
{
    public function __construct()
    {
        
    }
    public function index()


    {
        $data = [
            'title' => 'Share Posts',
            'description' => 'Simple social network built on the ohmy MVC framework.'
        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'about',
            'description' => 'App to share posts with other users.'
        ];
        $this->view('pages/about', $data);
    }
}
