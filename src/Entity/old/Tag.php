<?php

// namespace App\Entity;

/**
 * Tag
 */
class Tag
{
    /**
     * @var int
     */
    private $tagId;

    /**
     * @var string
     */
    private $tagName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fkRelPostTag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkRelPostTag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get tagId.
     *
     * @return int
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagName.
     *
     * @param string $tagName
     *
     * @return Tag
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * Get tagName.
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Add fkRelPostTag.
     *
     * @param \RelPostTag $fkRelPostTag
     *
     * @return Tag
     */
    public function addFkRelPostTag(\RelPostTag $fkRelPostTag)
    {
        $this->fkRelPostTag[] = $fkRelPostTag;

        return $this;
    }

    /**
     * Remove fkRelPostTag.
     *
     * @param \RelPostTag $fkRelPostTag
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFkRelPostTag(\RelPostTag $fkRelPostTag)
    {
        return $this->fkRelPostTag->removeElement($fkRelPostTag);
    }

    /**
     * Get fkRelPostTag.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkRelPostTag()
    {
        return $this->fkRelPostTag;
    }
}
