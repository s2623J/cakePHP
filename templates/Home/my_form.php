
<h3><?= $message ?></h3>

<?php
    echo $this->Form->create(null, array(
        'url' => [
            'controller' => 'home', 'action' => 'formSubmit'
        ],
        'id' => 'first-id',
        'class' => 'first-class',
        'type' => 'file'
    ));

    // Form elements
    echo $this->Form->text('first_name', array(
        'placeholder' => 'Enter first name',
        'id' => 'first_name',
        'class' => 'form-control',
        'data-id' => 3
    ));

    // Password field
    echo $this->Form->password('password', array(
        'class' => 'form-control',
        'id' => 'Password',
        'placeholder' => '*******'
    ));

    // Hidden field
    echo $this->Form->hidden('first_hidden', array(
        'value' => 'data1'
    ));

    // Textareas
    echo $this->Form->textarea('address', array(
        'placeholder' => 'Address',
        'rows' => 4,
        'cols' => 10
    ));

    // Select box
    echo $this->Form->select(
        'selectItems',
        [1, 2, 3, 4, 5],
        [
            'multiple' => true,
            'value' => [1, 3],
            'class' => 'select-class',
            'id' => 'select_box'
        ]
    );

    // Drop down box
    echo $this->Form->select(
        'selectItemsDropDown',
        [1, 2, 3, 4, 5],
        ['empty' => '(choose one)']
    );

    // Checkbox
    echo $this->Form->checkbox('done', 
        [
            'hiddenField' => false,
            'class' => 'form-control2',
            'id' => 'chk_test',
            'value' => 1
        ]);

    echo $this->Form->end();
?>