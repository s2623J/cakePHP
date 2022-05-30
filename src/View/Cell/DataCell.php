<?php

    namespace App\View\Cell;

    use Cake\View\Cell;

    // Define the Cell controller:
    class DataCell extends Cell
    {
        public $developer;

        public function initialize(): void
        {
            $this->developer = array( // Sets default values at initialization
                'dev1',
                'dev2',
                'dev3',
                'dev4'
            );
        }

        public function display(): void
        {
            // Set value count
            // $this->set('dev_count', count($this->developer));
            $this->set('dev_count', '');
        }

        public function sayMessage($message = null, $devs = null): void
        {
            // say_message.php
            // $msg = "Welcome to a new view cell!";
            // isset($message) ? $this->set("welcome_msg", $message) : 
            //     $this->set("welcome_msg", $msg);
            // print_r($devs);
            // isset($devs) ? $this->set("welcome_msg", $message) : 
            //     $this->set("welcome_msg", $msg);
            $this->set("welcome_msg", '');
        }
    }
