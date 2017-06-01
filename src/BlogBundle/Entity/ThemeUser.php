<?php

namespace BlogBundle\Entity;

/**
 * ThemeUser
 */
class ThemeUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $critique;

    /**
     * @var \BlogBundle\Entity\User
     */
    private $user;

    /**
     * @var \BlogBundle\Entity\ThemeOfficiel
     */
    private $themeofficiel;


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
     * Set critique
     *
     * @param integer $critique
     *
     * @return ThemeUser
     */
    public function setCritique($critique)
    {
        $this->critique = $critique;

        return $this;
    }

    /**
     * Get critique
     *
     * @return integer
     */
    public function getCritique()
    {
        return $this->critique;
    }

    /**
     * Set user
     *
     * @param \BlogBundle\Entity\User $user
     *
     * @return ThemeUser
     */
    public function setUser(\BlogBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BlogBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set themeofficiel
     *
     * @param \BlogBundle\Entity\ThemeOfficiel $themeofficiel
     *
     * @return ThemeUser
     */
    public function setThemeofficiel(\BlogBundle\Entity\ThemeOfficiel $themeofficiel = null)
    {
        $this->themeofficiel = $themeofficiel;

        return $this;
    }

    /**
     * Get themeofficiel
     *
     * @return \BlogBundle\Entity\ThemeOfficiel
     */
    public function getThemeofficiel()
    {
        return $this->themeofficiel;
    }


    //////////////////////////////////////////

    /*public function __toString()
    {
        return $this->id.'-'.$this->cause;
    }*/
}
