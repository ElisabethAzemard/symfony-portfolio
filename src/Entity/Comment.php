<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $authorEmail;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Post", inversedBy="fkCommentId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $relatedPost;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="fkCommentId")
     */
    private $relatedMember;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthorEmail(): ?string
    {
        return $this->authorEmail;
    }

    public function setAuthorEmail(?string $authorEmail): self
    {
        $this->authorEmail = $authorEmail;

        return $this;
    }

    public function getRelatedPost(): ?Post
    {
        return $this->relatedPost;
    }

    public function setRelatedPost(?Post $relatedPost): self
    {
        $this->relatedPost = $relatedPost;

        return $this;
    }

    public function getRelatedMember(): ?Member
    {
        return $this->relatedMember;
    }

    public function setRelatedMember(?Member $relatedMember): self
    {
        $this->relatedMember = $relatedMember;

        return $this;
    }
}
