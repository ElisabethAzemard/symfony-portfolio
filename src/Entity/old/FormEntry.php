<?php

// namespace App\Entity;

/**
 * FormEntry
 */
class FormEntry
{
    /**
     * @var int
     */
    private $formEntryId;

    /**
     * @var string|null
     */
    private $formEntryFirstName;

    /**
     * @var string|null
     */
    private $formEntryLastName;

    /**
     * @var string|null
     */
    private $formEntryEmail;

    /**
     * @var string|null
     */
    private $formEntrySubject;

    /**
     * @var string|null
     */
    private $formEntryMessage;


    /**
     * Get formEntryId.
     *
     * @return int
     */
    public function getFormEntryId()
    {
        return $this->formEntryId;
    }

    /**
     * Set formEntryFirstName.
     *
     * @param string|null $formEntryFirstName
     *
     * @return FormEntry
     */
    public function setFormEntryFirstName($formEntryFirstName = null)
    {
        $this->formEntryFirstName = $formEntryFirstName;

        return $this;
    }

    /**
     * Get formEntryFirstName.
     *
     * @return string|null
     */
    public function getFormEntryFirstName()
    {
        return $this->formEntryFirstName;
    }

    /**
     * Set formEntryLastName.
     *
     * @param string|null $formEntryLastName
     *
     * @return FormEntry
     */
    public function setFormEntryLastName($formEntryLastName = null)
    {
        $this->formEntryLastName = $formEntryLastName;

        return $this;
    }

    /**
     * Get formEntryLastName.
     *
     * @return string|null
     */
    public function getFormEntryLastName()
    {
        return $this->formEntryLastName;
    }

    /**
     * Set formEntryEmail.
     *
     * @param string|null $formEntryEmail
     *
     * @return FormEntry
     */
    public function setFormEntryEmail($formEntryEmail = null)
    {
        $this->formEntryEmail = $formEntryEmail;

        return $this;
    }

    /**
     * Get formEntryEmail.
     *
     * @return string|null
     */
    public function getFormEntryEmail()
    {
        return $this->formEntryEmail;
    }

    /**
     * Set formEntrySubject.
     *
     * @param string|null $formEntrySubject
     *
     * @return FormEntry
     */
    public function setFormEntrySubject($formEntrySubject = null)
    {
        $this->formEntrySubject = $formEntrySubject;

        return $this;
    }

    /**
     * Get formEntrySubject.
     *
     * @return string|null
     */
    public function getFormEntrySubject()
    {
        return $this->formEntrySubject;
    }

    /**
     * Set formEntryMessage.
     *
     * @param string|null $formEntryMessage
     *
     * @return FormEntry
     */
    public function setFormEntryMessage($formEntryMessage = null)
    {
        $this->formEntryMessage = $formEntryMessage;

        return $this;
    }

    /**
     * Get formEntryMessage.
     *
     * @return string|null
     */
    public function getFormEntryMessage()
    {
        return $this->formEntryMessage;
    }
}
