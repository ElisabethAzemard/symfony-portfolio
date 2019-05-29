<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberRepository")
 */
class Member
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="relatedMember")
     */
    private $fkCommentId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Post", mappedBy="relatedMember")
     */
    private $fkPostId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="integer")
     */
    private $role;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $about;

    public function __construct()
    {
        $this->fkCommentId = new ArrayCollection();
        $this->fkPostId = new ArrayCollection();
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
            $fkCommentId->setRelatedMember($this);
        }

        return $this;
    }

    public function removeFkCommentId(Comment $fkCommentId): self
    {
        if ($this->fkCommentId->contains($fkCommentId)) {
            $this->fkCommentId->removeElement($fkCommentId);
            // set the owning side to null (unless already changed)
            if ($fkCommentId->getRelatedMember() === $this) {
                $fkCommentId->setRelatedMember(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getFkPostId(): Collection
    {
        return $this->fkPostId;
    }

    public function addFkPostId(Post $fkPostId): self
    {
        if (!$this->fkPostId->contains($fkPostId)) {
            $this->fkPostId[] = $fkPostId;
            $fkPostId->setRelatedMember($this);
        }

        return $this;
    }

    public function removeFkPostId(Post $fkPostId): self
    {
        if ($this->fkPostId->contains($fkPostId)) {
            $this->fkPostId->removeElement($fkPostId);
            // set the owning side to null (unless already changed)
            if ($fkPostId->getRelatedMember() === $this) {
                $fkPostId->setRelatedMember(null);
            }
        }

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }
}
