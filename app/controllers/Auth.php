<?php
 class Auth extends Controller {

 	// We can keep auth errors and messages here and access it from the View
	 public $errors = [];
	 public $messages = [];

 	public function index() {
 		// If user comes to index method, we show him login form
	    $this->loginForm();
    }

 	// Login Form
     public function loginForm() {

         $data['body'] = "Please login in order to enjoy our platform.";
         $this->view("auth/login", $data);
     }

     public function login() {
        // authenticate user
	     $user = $this->model('User');
	     $userData = $user->getUserByUsername($_POST['username']);

	     if( password_verify($_POST['password'], $userData[0]['password'])) {

	     	$_SESSION['username'] = $userData[0]['username'];
	     	$_SESSION['user_id'] = $userData[0]['id'];

		     // Redirect to Home/Index
		     header("Location: /" . CONFIG['site_path'] );

	     } else {

		     $this->errors[] = "Username or password is incorrect";
		     $this->loginForm();

	     }

     }


     public function logout() {
        // destroy session and vars and redirect to login form
	     session_destroy();
	     $_SESSION = null;
	     $this->loginForm();
     }

	 // Registration Form
     public function regForm() {

         $data['body'] = "Only this month You can register for free.";
         $this->view("auth/register", $data);
     }


     public function reg() {

 		$user = $this->model('User');

 		if(!isset($_POST['username'])) {

		    $this->errors[] = "No username defined.";
		    $this->regForm();

	    } else if(count($user->getUserByUsername($_POST['username'])) > 0) {

		    $this->errors[] = "Username already in use.";
		    $this->regForm();

	    } else if ($_POST["password"] === $_POST["password_r"]) {

 			unset($_POST['password_r']);

 			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$user->addUser($_POST);
		    $this->messages[] = "Successfully registered. Please login.";

		    // register user if valid data and then redirect to login form
		    $this->loginForm();
	    }

     }


 }