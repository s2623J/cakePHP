<?php

    $this->Breadcrumbs->add([
        [
            "title" => "Home",
            "url" => [
                "controller" => "Home",
                "action" => "dashboard"
            ]
        ],
        [
            'title' => 'Add Student',
            "url" => [
                "controller" => "Home",
                "action" => "student"
            ]
        ]
    ]);

    // $this->Breadcrumbs->add(
    //     'Home',
    //     ['controller' => 'Home', 'action' => 'dashboard']
    // );

    // $this->Breadcrumbs->add(
    //     'Student',
    //     ['controller' => 'Home', 'action' => 'student'],
    //     [
    //         "class" => "add-student-class",
    //         "data-id" => 21,
    //         "innerAttrs" => [
    //             "class" => "first-child",
    //             "id" => "first-aid"
    //         ]
    //     ]
    // );

    // $this->Breadcrumbs->add(
    //     'Add Student',
    //     ['controller' => 'Home', 'action' => 'add_student']
    // );

    // $this->Breadcrumbs->prepend(
    //     'First Page',
    //     ['controller' => 'Home', 'action' => 'first_ppage']
    // );

    echo $this->Breadcrumbs->render([
        "class" => "my-own-trail"     // Adds a class to the class attribute
    ]);