<?php


namespace Command;


class GoOffline
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function execute(): void
    {
        $this->user->goOffline();
    }

    public function undo(): void
    {
        $this->user->goOnline();
    }

    public function redo(): void
    {
        $this->execute();
    }
}