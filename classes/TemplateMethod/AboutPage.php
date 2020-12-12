<?php


namespace TemplateMethod;


class AboutPage extends Page
{

    protected function setContent()
    {
        $this->content = $this->render('content', []);
    }
}