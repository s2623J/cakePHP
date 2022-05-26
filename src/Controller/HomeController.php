<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function initialize(): void  // Use Initialize instead of a constructor function
    {
        parent::initialize();
    }

    public function sayHello(): void
    {
        // $this->autoRender = false; // Prevents corresponding page in "/home" directory from rendering
        // echo '<h1>Hello! ;-)</h1>';

        // Sending parameters from this action to the view file
        // $name = 'Online web tutorial';
        // $email = 'online@tutorial.com';
        // $this->set('name', $name);
        // $this->set('email', $email);
        $data = array(
            'name' => 'Online web tutorial',
            'email' => 'online@tutorial.com'
        );
        $this->set('data', $data);
    }

    public function sayWelcomeHello()
    {
        // Home/say_welcome_hello.php
        
    }
}
