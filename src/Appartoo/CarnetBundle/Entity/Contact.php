<?php

namespace Appartoo\CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Appartoo\CarnetBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prop", type="string", length=255)
     */
    private $prop;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prop
     *
     * @param string $prop
     * @return Contact
     */
    public function setProp($prop)
    {
        $this->prop = $prop;

        return $this;
    }

    /**
     * Get prop
     *
     * @return string
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }
}
