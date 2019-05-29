<?php

// namespace App\Entity;

/**
 * Category
 */

class Category
{
    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var string|null
     */
    private $categoryDescription;

    /**
     * @var string
     */
    private $categoryCover;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fkRelPostCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkRelPostCategory = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get categoryId.
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryName.
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName.
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryDescription.
     *
     * @param string|null $categoryDescription
     *
     * @return Category
     */
    public function setCategoryDescription($categoryDescription = null)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Get categoryDescription.
     *
     * @return string|null
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }

    /**
     * Set categoryCover.
     *
     * @param string $categoryCover
     *
     * @return Category
     */
    public function setCategoryCover($categoryCover)
    {
        $this->categoryCover = $categoryCover;

        return $this;
    }

    /**
     * Get categoryCover.
     *
     * @return string
     */
    public function getCategoryCover()
    {
        return $this->categoryCover;
    }

    /**
     * Add fkRelPostCategory.
     *
     * @param \RelPostCategory $fkRelPostCategory
     *
     * @return Category
     */
    public function addFkRelPostCategory(\RelPostCategory $fkRelPostCategory)
    {
        $this->fkRelPostCategory[] = $fkRelPostCategory;

        return $this;
    }

    /**
     * Remove fkRelPostCategory.
     *
     * @param \RelPostCategory $fkRelPostCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFkRelPostCategory(\RelPostCategory $fkRelPostCategory)
    {
        return $this->fkRelPostCategory->removeElement($fkRelPostCategory);
    }

    /**
     * Get fkRelPostCategory.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkRelPostCategory()
    {
        return $this->fkRelPostCategory;
    }
}
