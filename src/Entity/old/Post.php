<?php

// namespace App\Entity;

/**
 * Post
 */
class Post
{
    /**
     * @var int
     */
    private $postId;

    /**
     * @var string
     */
    private $postStatus = 'published';

    /**
     * @var \DateTime
     */
    private $postDateCreated;

    /**
     * @var \DateTime|null
     */
    private $postDateUpdated;

    /**
     * @var string
     */
    private $postTitle;

    /**
     * @var string|null
     */
    private $postContent;

    /**
     * @var string|null
     */
    private $postCover;

    /**
     * @var string|null
     */
    private $postExcerpt;

    /**
     * @var bool
     */
    private $postCommentOpen;

    /**
     * @var int|null
     */
    private $postCommentCount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $RelPostCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $RelPostTag;

    /**
     * @var \Comment
     */
    private $fkComment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->RelPostCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->RelPostTag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get postId.
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postStatus.
     *
     * @param string $postStatus
     *
     * @return Post
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;

        return $this;
    }

    /**
     * Get postStatus.
     *
     * @return string
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set postDateCreated.
     *
     * @param \DateTime $postDateCreated
     *
     * @return Post
     */
    public function setPostDateCreated($postDateCreated)
    {
        $this->postDateCreated = $postDateCreated;

        return $this;
    }

    /**
     * Get postDateCreated.
     *
     * @return \DateTime
     */
    public function getPostDateCreated()
    {
        return $this->postDateCreated;
    }

    /**
     * Set postDateUpdated.
     *
     * @param \DateTime|null $postDateUpdated
     *
     * @return Post
     */
    public function setPostDateUpdated($postDateUpdated = null)
    {
        $this->postDateUpdated = $postDateUpdated;

        return $this;
    }

    /**
     * Get postDateUpdated.
     *
     * @return \DateTime|null
     */
    public function getPostDateUpdated()
    {
        return $this->postDateUpdated;
    }

    /**
     * Set postTitle.
     *
     * @param string $postTitle
     *
     * @return Post
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle.
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postContent.
     *
     * @param string|null $postContent
     *
     * @return Post
     */
    public function setPostContent($postContent = null)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent.
     *
     * @return string|null
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postCover.
     *
     * @param string|null $postCover
     *
     * @return Post
     */
    public function setPostCover($postCover = null)
    {
        $this->postCover = $postCover;

        return $this;
    }

    /**
     * Get postCover.
     *
     * @return string|null
     */
    public function getPostCover()
    {
        return $this->postCover;
    }

    /**
     * Set postExcerpt.
     *
     * @param string|null $postExcerpt
     *
     * @return Post
     */
    public function setPostExcerpt($postExcerpt = null)
    {
        $this->postExcerpt = $postExcerpt;

        return $this;
    }

    /**
     * Get postExcerpt.
     *
     * @return string|null
     */
    public function getPostExcerpt()
    {
        return $this->postExcerpt;
    }

    /**
     * Set postCommentOpen.
     *
     * @param bool $postCommentOpen
     *
     * @return Post
     */
    public function setPostCommentOpen($postCommentOpen)
    {
        $this->postCommentOpen = $postCommentOpen;

        return $this;
    }

    /**
     * Get postCommentOpen.
     *
     * @return bool
     */
    public function getPostCommentOpen()
    {
        return $this->postCommentOpen;
    }

    /**
     * Set postCommentCount.
     *
     * @param int|null $postCommentCount
     *
     * @return Post
     */
    public function setPostCommentCount($postCommentCount = null)
    {
        $this->postCommentCount = $postCommentCount;

        return $this;
    }

    /**
     * Get postCommentCount.
     *
     * @return int|null
     */
    public function getPostCommentCount()
    {
        return $this->postCommentCount;
    }

    /**
     * Add relPostCategory.
     *
     * @param \RelPostCategory $relPostCategory
     *
     * @return Post
     */
    public function addRelPostCategory(\RelPostCategory $relPostCategory)
    {
        $this->RelPostCategory[] = $relPostCategory;

        return $this;
    }

    /**
     * Remove relPostCategory.
     *
     * @param \RelPostCategory $relPostCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRelPostCategory(\RelPostCategory $relPostCategory)
    {
        return $this->RelPostCategory->removeElement($relPostCategory);
    }

    /**
     * Get relPostCategory.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelPostCategory()
    {
        return $this->RelPostCategory;
    }

    /**
     * Add relPostTag.
     *
     * @param \RelPostTag $relPostTag
     *
     * @return Post
     */
    public function addRelPostTag(\RelPostTag $relPostTag)
    {
        $this->RelPostTag[] = $relPostTag;

        return $this;
    }

    /**
     * Remove relPostTag.
     *
     * @param \RelPostTag $relPostTag
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRelPostTag(\RelPostTag $relPostTag)
    {
        return $this->RelPostTag->removeElement($relPostTag);
    }

    /**
     * Get relPostTag.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelPostTag()
    {
        return $this->RelPostTag;
    }

    /**
     * Set fkComment.
     *
     * @param \Comment|null $fkComment
     *
     * @return Post
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
}
