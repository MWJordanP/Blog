<?php

namespace BlogBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userSignalements;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userSignalements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add userSignalement
     *
     * @param \BlogBundle\Entity\Signalement $userSignalement
     *
     * @return User
     */
    public function addUserSignalement(\BlogBundle\Entity\Signalement $userSignalement)
    {
        $this->userSignalements[] = $userSignalement;

        return $this;
    }

    /**
     * Remove userSignalement
     *
     * @param \BlogBundle\Entity\Signalement $userSignalement
     */
    public function removeUserSignalement(\BlogBundle\Entity\Signalement $userSignalement)
    {
        $this->userSignalements->removeElement($userSignalement);
    }

    /**
     * Get userSignalements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserSignalements()
    {
        return $this->userSignalements;
    }

    /**
     * Add role
     *
     * @param \BlogBundle\Entity\Role $role
     *
     * @return User
     */
    public function addRole(\BlogBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \BlogBundle\Entity\Role $role
     */
    public function removeRole(\BlogBundle\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        
        return $this->roles->toArray();
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userCommentaires;


    /**
     * Add article
     *
     * @param \BlogBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \BlogBundle\Entity\Article $article
     */
    public function removeArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add userCommentaire
     *
     * @param \BlogBundle\Entity\Commentaire $userCommentaire
     *
     * @return User
     */
    public function addUserCommentaire(\BlogBundle\Entity\Commentaire $userCommentaire)
    {
        $this->userCommentaires[] = $userCommentaire;

        return $this;
    }

    /**
     * Remove userCommentaire
     *
     * @param \BlogBundle\Entity\Commentaire $userCommentaire
     */
    public function removeUserCommentaire(\BlogBundle\Entity\Commentaire $userCommentaire)
    {
        $this->userCommentaires->removeElement($userCommentaire);
    }

    /**
     * Get userCommentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserCommentaires()
    {
        return $this->userCommentaires;
    }


    /********************************************************/

    public function __toString() {

        return $this->id.'-'.$this->username;
    }


    
}
