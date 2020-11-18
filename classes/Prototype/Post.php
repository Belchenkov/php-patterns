<?php


namespace Prototype;


class Post implements IPost
{

    private string $title;
    private string $text;
    private User $user;
    private array $comment = [];
    private \DateTime $created_at;

    /**
     * Post constructor.
     * @param $user
     * @param string $title
     * @param string $text
     */
    public function __construct(User $user, string $title, string $text)
    {
        $this->user = $user;
        $this->title = $title;
        $this->text = $text;
        $this->created_at = new \DateTime();

        $this->user->addPost($this);
    }

    public function addComment(string $comment): void
    {
        $this->comment[] = $comment;
    }

    public function __clone()
    {
        $this->title .= ' clone';
        $this->text .= ' clone';
        $this->user->addPost($this);
        $this->comment = [];
        $this->created_at = new \DateTime();
    }
}