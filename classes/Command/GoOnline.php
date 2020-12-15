<?php


namespace Command;


class GoOnline implements ICommand
{

    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function execute(): void
    {
        $this->user->goOnline();
    }

    public function undo(): void
    {
        $this->user->goOffline();
    }

    public function redo(): void
    {
        $this->execute();
    }
}