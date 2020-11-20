<?php


namespace Observer;


use SplSubject;

class SendMailPlugin implements \SplObserver
{

    public function update(\SplSubject $subject, string $event = null, $data = null): void
    {
        echo "Send Email";
        // mail();
    }
}