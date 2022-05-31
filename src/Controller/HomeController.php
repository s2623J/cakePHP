<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class HomeController extends AppController
{
    public function initialize(): void  // Use Initialize instead of a constructor function
    {
        parent::initialize();

        // Setting custom layout
        // $this->viewBuilder()->setLayout('layout');
        $this->viewBuilder()->setLayout('custom/layout');
        $this->base_url = Router::url('/');
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
        $this->set('base_url', $this->base_url);

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

    public function myTrail()
    {
        // my_trail.php

    }

    public function dashboard()
    {
        # code...
    }

    public function myMessage()
    {
        // my_message.php
        $this->Flash->sayHello('The user has been saved.', [
            'key' => 'custom_key',
            'params' => [
                'name' => 'Spike',
                'email' => 'test@test.com'
            ]
        ]);
        // $this->Flash->error('Something wrong happened.');
        // $this->Flash->sayHello('Saying hello!');
    }

    public function myUrl()
    {
        $this->set('message', 'We are using UrlHelper');
    }

    public function myForm()
    {
        // my_form.php
        $this->set('message', 'We are using FormHelper');
    }
}
