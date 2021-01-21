<?php

/* Base Controller
* Loads Models and Views
*/
class Controller
{
    //load model

    public function model($model)
    {
        // require model file
        require_once '../app/models/' . $model . '.php';
        //instantiate model
        return new $model();
    }

    // load view

    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }
}
