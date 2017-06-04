<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class Article
 *
 * @ORM\Entity()
 * @ORM\Table(name="articles")
 */
class Article
{
    use TimestampableEntity;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @var Reporting[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Reporting", mappedBy="article")
     */
    protected $reports;

    /**
     * @var User
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="roles")
     */
    protected $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reports = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Reporting[]|ArrayCollection
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * @param Reporting[]|ArrayCollection $reports
     *
     * @return Article
     */
    public function setReports($reports)
    {
        $this->reports = $reports;

        return $this;
    }

    /**
     * @return User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User $users
     *
     * @return Article
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }
}
