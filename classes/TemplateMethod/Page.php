<?php


namespace TemplateMethod;


abstract class Page
{
    protected $header;
    protected $content;
    protected $footer;
    protected $page;

    abstract protected function setContent();

    protected function setHeader(): void
    {
        $this->header = $this->render('header', []);
    }

    protected function setFooter(): void
    {
        $this->footer = $this->render('footer', []);
    }

    public function getPage()
    {
        echo $this->page;
    }

    public function render(string $path, array $params = [])
    {
        extract($params);

        ob_start();

        if (!file_exists('theme/' . $path . '.php')) {
            throw new \Exception("Error");
        }

        include 'theme/' . $path . '.php';

        return ob_get_clean();
    }

    public function output()
    {
        $this->setHeader();
        $this->setContent();
        $this->setFooter();

        $this->page = $this->render('main', [
            'header' => $this->header,
            'content' => $this->content,
            'footer' => $this->footer,
        ]);

        return $this->getPage();
    }
}