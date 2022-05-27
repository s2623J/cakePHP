<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function initialize(): void  // Use Initialize instead of a constructor function
    {
        parent::initialize();

        // Setting custom layout
        // $this->viewBuilder()->setLayout('layout');
        $this->viewBuilder()->setLayout('custom/layout');
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
        $this->set('title', 'Welcome to the Say Hello page!');
    }

    public function sayWelcomeHello()
    {
        // Home/say_welcome_hello.php
        
    }

    public function sayWelcome(): void
    {
        // say_welcome.php
        // $this->viewBuilder()->setLayout('layout'); // Cherry pick the new custom layout
        $this->set('title', 'Welcome to the Say Welcome page!');
    }
}
