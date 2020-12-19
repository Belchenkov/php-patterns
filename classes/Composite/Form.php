<?php


namespace Composite;


class Form extends ParentFormElement
{
    public function render(): string
    {
        $formText = '<form>';

        $formText .= parent::render();

        $formText .= '</form>';

        return $formText;
    }
}