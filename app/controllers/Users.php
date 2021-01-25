<?php 
    class Users extends Controller
    {
        public function __construct(){

        }
        public function register(){
        //check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form

            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);


            //Init Data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            //Validate Email
            if(empty($data['email'])){
                $data['email_err'] = 'Please Enter Email';
            }
            //Validate Name
            if(empty($data['name'])){
                $data['name_err'] = 'Please Enter Name';
            }
            //Validate Password
            if(empty($data['password'])){
                $data['password_err'] = 'Please Enter Password';
            } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
            }
            //Validate Password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please Confirm Password';
            }else {
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            }

            //Make sure errors are empty

            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                die('SUCCESS');
            } else {
                //Load View with errors
                $this->view('users/register',$data);
            }
            

        } else {
            //Init Data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                    'confirm_password'=>'',
                    'name_err' => '',
                    'email_err'=>'',
                    'password_err'=>'',
                    'confirm_password_err'=>''
                ];
                //load view
                $this->view('users/register',$data);
                //echo 'load form';
            }
        }
        public function login(){
            //check for post
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //Process form


            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);


            //Init Data
            $data = [
                
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            //Validate Email
            if(empty($data['email'])){
                $data['email_err'] = 'Please Enter Email';
            }

            //Validate Password
            if(empty($data['password'])){
                $data['password_err'] = 'Please Enter Password';
            } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Make sure they are empty

            if(empty($data['email_err']) && empty($data['password_err'])){
                // Validated
                die('SUCCESS');
            } else {
                //Load View with errors
                $this->view('users/login',$data);
            }


            } else {
                //Init Data
                $data = [

                    'email'=> '',
                    'password'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                ];
                //load view
                $this->view('users/login',$data);
                //echo 'load form';
            }
        }
    }