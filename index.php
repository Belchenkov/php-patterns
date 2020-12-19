<?php


use Composite\Form;
use Composite\LabelElement;
use Composite\InputElement;
use Composite\FieldsetElement;

require "functions.php";

spl_autoload_register('project_autoload');

$form = new Form();
$form->addInput(new LabelElement('Email '));
$form->addInput(new InputElement());

$fieldset = new FieldsetElement();
$fieldset->addInput(new LabelElement('<br/>First Name '));
$fieldset->addInput(new InputElement());
$fieldset->addInput(new LabelElement('<br/>Last Name '));
$fieldset->addInput(new InputElement());

$form->addInput($fieldset);

echo $form->render();