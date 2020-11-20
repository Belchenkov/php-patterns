<?php


namespace Observer;


use SplObserver;

class Blog implements \SplSubject
{
    public string $title;
    public string $text;

    private array $_observers = [];


    public function __construct()
    {
        $this->_observers['all'] = [];
    }

    public function attach(\SplObserver $observer, string $event = "all"): void
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }

        $this->_observers[$event][] = $observer;
    }

    public function detach(\SplObserver $observer, string $event = "all"): void
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }

        $observers = array_merge($this->_observers[$event], $this->_observers["all"]);

        foreach ($observers as $key => $item) {
            if ($observer === $item) {
                unset($observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "all", $data = null): void
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }

        $observers = array_merge($this->_observers[$event], $this->_observers["all"]);

        foreach ($observers as $key => $item) {
            $item->update($this, $event, $data);
        }
    }

    public function create(): void
    {
        echo "Create";
        $this->notify("blog:create");
    }

    public function update(): void
    {
        echo "Update";
        $this->notify("blog:update");
    }

    public function delete(): void
    {
        echo "Delete";
        $this->notify("blog:delete");
    }
}