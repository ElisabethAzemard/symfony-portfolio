<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="relatedPost", orphanRemoval=true)
     */
    private $fkCommentId;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateUpdated;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cover;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $excerpt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $commentsOpen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $commentCount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Member", inversedBy="fkPostId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $relatedMember;

    public function __construct()
    {
        $this->fkCommentId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getFkCommentId(): Collection
    {
        return $this->fkCommentId;
    }

    public function addFkCommentId(Comment $fkCommentId): self
    {
        if (!$this->fkCommentId->contains($fkCommentId)) {
            $this->fkCommentId[] = $fkCommentId;
            $fkCommentId->setRelatedPost($this);
        }

        return $this;
    }

    public function removeFkCommentId(Comment $fkCommentId): self
    {
        if ($this->fkCommentId->contains($fkCommentId)) {
            $this->fkCommentId->removeElement($fkCommentId);
            // set the owning side to null (unless already changed)
            if ($fkCommentId->getRelatedPost() === $this) {
                $fkCommentId->setRelatedPost(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated(): ?\DateTimeInterface
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(?\DateTimeInterface $dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
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

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    public function setExcerpt(?string $excerpt): self
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getCommentsOpen(): ?bool
    {
        return $this->commentsOpen;
    }

    public function setCommentsOpen(bool $commentsOpen): self
    {
        $this->commentsOpen = $commentsOpen;

        return $this;
    }

    public function getCommentCount(): ?int
    {
        return $this->commentCount;
    }

    public function setCommentCount(?int $commentCount): self
    {
        $this->commentCount = $commentCount;

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
