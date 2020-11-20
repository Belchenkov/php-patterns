<?php


namespace Observer;


class ChangeTextPlugin implements \SplObserver
{
    public function update(\SplSubject $subject, string $event = null, $data = null): void
    {
        if (isset($subject->text)) {
            $subject->text .= " Create event";
        }
    }
}