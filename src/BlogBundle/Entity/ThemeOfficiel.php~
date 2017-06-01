<?php

namespace BlogBundle\Entity;

/**
 * ThemeOfficiel
 */
class ThemeOfficiel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $theme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usersThemes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usersThemes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set theme
     *
     * @param string $theme
     *
     * @return ThemeOfficiel
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Add usersTheme
     *
     * @param \BlogBundle\Entity\User $usersTheme
     *
     * @return ThemeOfficiel
     */
    public function addUsersTheme(\BlogBundle\Entity\User $usersTheme)
    {
        $this->usersThemes[] = $usersTheme;

        return $this;
    }

    /**
     * Remove usersTheme
     *
     * @param \BlogBundle\Entity\User $usersTheme
     */
    public function removeUsersTheme(\BlogBundle\Entity\User $usersTheme)
    {
        $this->usersThemes->removeElement($usersTheme);
    }

    /**
     * Get usersThemes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersThemes()
    {
        return $this->usersThemes;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $themeArticles;


    /**
     * Add themeArticle
     *
     * @param \BlogBundle\Entity\Article $themeArticle
     *
     * @return ThemeOfficiel
     */
    public function addThemeArticle(\BlogBundle\Entity\Article $themeArticle)
    {
        $this->themeArticles[] = $themeArticle;

        return $this;
    }

    /**
     * Remove themeArticle
     *
     * @param \BlogBundle\Entity\Article $themeArticle
     */
    public function removeThemeArticle(\BlogBundle\Entity\Article $themeArticle)
    {
        $this->themeArticles->removeElement($themeArticle);
    }

    /**
     * Get themeArticles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getThemeArticles()
    {
        return $this->themeArticles;
    }





        /********************************************/

         public function __toString() {

        return $this->id.'-'.$this->theme;
    }
    

    
}
