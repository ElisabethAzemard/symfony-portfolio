<?php

// namespace App\Entity;

/**
 * RelPostTag
 */
class RelPostTag
{
    /**
     * @var int
     */
    private $relPostTagId;

    /**
     * @var \Tag
     */
    private $fkTag;

    /**
     * @var \Post
     */
    private $fkPost;


    /**
     * Get relPostTagId.
     *
     * @return int
     */
    public function getRelPostTagId()
    {
        return $this->relPostTagId;
    }

    /**
     * Set fkTag.
     *
     * @param \Tag|null $fkTag
     *
     * @return RelPostTag
     */
    public function setFkTag(\Tag $fkTag = null)
    {
        $this->fkTag = $fkTag;

        return $this;
    }

    /**
     * Get fkTag.
     *
     * @return \Tag|null
     */
    public function getFkTag()
    {
        return $this->fkTag;
    }

    /**
     * Set fkPost.
     *
     * @param \Post|null $fkPost
     *
     * @return RelPostTag
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
