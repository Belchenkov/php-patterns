<?php


namespace Observer;


class ChangeTitlePlugin implements \SplObserver
{
    public function update(\SplSubject $subject, string $event = null, $data = null): void
    {
        if (isset($subject->title)) {
            $subject->title .= " Create event";
        }
    }
}