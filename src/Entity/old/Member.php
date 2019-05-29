<?php

// namespace App\Entity;

/**
 * Member
 */
class Member
{
    /**
     * @var int
     */
    private $memberId;

    /**
     * @var string
     */
    private $memberUsername;

    /**
     * @var string
     */
    private $memberEmail;

    /**
     * @var string|null
     */
    private $memberPassword;

    /**
     * @var string|null
     */
    private $memberAvatar;

    /**
     * @var int|null
     */
    private $memberRole;

    /**
     * @var string|null
     */
    private $memberDescription;

    /**
     * @var string|null
     */
    private $memberAbout;

    /**
     * @var \Comment
     */
    private $fkComment;

    /**
     * @var \Post
     */
    private $fkPost;


    /**
     * Get memberId.
     *
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set memberUsername.
     *
     * @param string $memberUsername
     *
     * @return Member
     */
    public function setMemberUsername($memberUsername)
    {
        $this->memberUsername = $memberUsername;

        return $this;
    }

    /**
     * Get memberUsername.
     *
     * @return string
     */
    public function getMemberUsername()
    {
        return $this->memberUsername;
    }

    /**
     * Set memberEmail.
     *
     * @param string $memberEmail
     *
     * @return Member
     */
    public function setMemberEmail($memberEmail)
    {
        $this->memberEmail = $memberEmail;

        return $this;
    }

    /**
     * Get memberEmail.
     *
     * @return string
     */
    public function getMemberEmail()
    {
        return $this->memberEmail;
    }

    /**
     * Set memberPassword.
     *
     * @param string|null $memberPassword
     *
     * @return Member
     */
    public function setMemberPassword($memberPassword = null)
    {
        $this->memberPassword = $memberPassword;

        return $this;
    }

    /**
     * Get memberPassword.
     *
     * @return string|null
     */
    public function getMemberPassword()
    {
        return $this->memberPassword;
    }

    /**
     * Set memberAvatar.
     *
     * @param string|null $memberAvatar
     *
     * @return Member
     */
    public function setMemberAvatar($memberAvatar = null)
    {
        $this->memberAvatar = $memberAvatar;

        return $this;
    }

    /**
     * Get memberAvatar.
     *
     * @return string|null
     */
    public function getMemberAvatar()
    {
        return $this->memberAvatar;
    }

    /**
     * Set memberRole.
     *
     * @param int|null $memberRole
     *
     * @return Member
     */
    public function setMemberRole($memberRole = null)
    {
        $this->memberRole = $memberRole;

        return $this;
    }

    /**
     * Get memberRole.
     *
     * @return int|null
     */
    public function getMemberRole()
    {
        return $this->memberRole;
    }

    /**
     * Set memberDescription.
     *
     * @param string|null $memberDescription
     *
     * @return Member
     */
    public function setMemberDescription($memberDescription = null)
    {
        $this->memberDescription = $memberDescription;

        return $this;
    }

    /**
     * Get memberDescription.
     *
     * @return string|null
     */
    public function getMemberDescription()
    {
        return $this->memberDescription;
    }

    /**
     * Set memberAbout.
     *
     * @param string|null $memberAbout
     *
     * @return Member
     */
    public function setMemberAbout($memberAbout = null)
    {
        $this->memberAbout = $memberAbout;

        return $this;
    }

    /**
     * Get memberAbout.
     *
     * @return string|null
     */
    public function getMemberAbout()
    {
        return $this->memberAbout;
    }

    /**
     * Set fkComment.
     *
     * @param \Comment|null $fkComment
     *
     * @return Member
     */
    public function setFkComment(\Comment $fkComment = null)
    {
        $this->fkComment = $fkComment;

        return $this;
    }

    /**
     * Get fkComment.
     *
     * @return \Comment|null
     */
    public function getFkComment()
    {
        return $this->fkComment;
    }

    /**
     * Set fkPost.
     *
     * @param \Post|null $fkPost
     *
     * @return Member
     */
    public function setFkPost(\Post $fkPost = null)
    {
        $this->fkPost = $fkPost;

        return $this;
    }

    /**
     * Get fkPost.
     *
     * @return \Post|null
     */
    public function getFkPost()
    {
        return $this->fkPost;
    }
}
