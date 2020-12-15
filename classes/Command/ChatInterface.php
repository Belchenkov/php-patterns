<?php


namespace Command;


class ChatInterface
{
    private ICommand $command;

    public function setCommand(ICommand $command): void
    {
        $this->command = $command;
    }

    public function run(): void
    {
        $this->command->execute();
    }

    public function undo(): void
    {
        $this->command->undo();
    }

    public function redo(): void
    {
        $this->command->redo();
    }
}