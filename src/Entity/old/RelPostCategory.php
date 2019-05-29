<?php

// namespace App\Entity;

/**
 * RelPostCategory
 */
class RelPostCategory
{
    /**
     * @var int
     */
    private $relPostCategoryId;

    /**
     * @var \Post
     */
    private $fkPost;

    /**
     * @var \Category
     */
    private $fkCategory;


    /**
     * Get relPostCategoryId.
     *
     * @return int
     */
    public function getRelPostCategoryId()
    {
        return $this->relPostCategoryId;
    }

    /**
     * Set fkPost.
     *
     * @param \Post|null $fkPost
     *
     * @return RelPostCategory
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

    /**
     * Set fkCategory.
     *
     * @param \Category|null $fkCategory
     *
     * @return RelPostCategory
     */
    public function setFkCategory(\Category $fkCategory = null)
    {
        $this->fkCategory = $fkCategory;

        return $this;
    }

    /**
     * Get fkCategory.
     *
     * @return \Category|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }
}
