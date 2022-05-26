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
        $this->autoRender = false;
        echo '<h1>Hello! ;-)</h1>';
    }

    public function sayWelcomeHello()
    {
        // Home/say_welcome_hello.php
        
    }
}
