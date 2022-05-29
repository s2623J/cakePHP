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
            $this->set('dev_count', count($this->developer));
        }
    }
