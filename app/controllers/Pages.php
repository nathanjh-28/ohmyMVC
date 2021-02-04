<?php

class Pages extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        if(isLoggedIn()){
            redirect('posts');
    }
        $data = [
            'title' => 'Share Posts',
            'description' => 'Simple social network built on a vanilla PHP framework.'
        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'An app to share posts with other users.'
        ];
        $this->view('pages/about', $data);
    }
}
