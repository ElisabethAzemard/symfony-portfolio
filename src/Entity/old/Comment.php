<?php

// namespace App\Entity;

/**
 * Comment
 */
class Comment
{
    /**
     * @var int
     */
    private $commentId;

    /**
     * @var string
     */
    private $commentContent;

    /**
     * @var string|null
     */
    private $commentAuthor;

    /**
     * @var string|null
     */
    private $commentAuthorEmail;


    /**
     * Get commentId.
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set commentContent.
     *
     * @param string $commentContent
     *
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent.
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentAuthor.
     *
     * @param string|null $commentAuthor
     *
     * @return Comment
     */
    public function setCommentAuthor($commentAuthor = null)
    {
        $this->commentAuthor = $commentAuthor;

        return $this;
    }

    /**
     * Get commentAuthor.
     *
     * @return string|null
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set commentAuthorEmail.
     *
     * @param string|null $commentAuthorEmail
     *
     * @return Comment
     */
    public function setCommentAuthorEmail($commentAuthorEmail = null)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;

        return $this;
    }

    /**
     * Get commentAuthorEmail.
     *
     * @return string|null
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }
}
