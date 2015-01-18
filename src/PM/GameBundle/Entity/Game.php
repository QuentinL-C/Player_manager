<?php

namespace PM\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\GameBundle\Entity\GameRepository")
 */
class Game
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="importChara", type="boolean")
     */
    private $importChara;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvlMin", type="smallint")
     */
    private $lvlMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvlMax", type="smallint")
     */
    private $lvlMax;

    /**
     * @var string
     *
     * @ORM\Column(name="wealthFactor", type="decimal")
     */
    private $wealthFactor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="PM\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $createUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    protected $createDate;

    /**
     * @ORM\ManyToOne(targetEntity="PM\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $updateUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    protected $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="updateComment", type="string", length=255, nullable=true)
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le commentaire ne doit pas dépasser {{ limit }} caractères."
     * )
     */
    protected $updateComment;


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
     * Set title
     *
     * @param string $title
     * @return Game
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set importChara
     *
     * @param boolean $importChara
     * @return Game
     */
    public function setImportChara($importChara)
    {
        $this->importChara = $importChara;

        return $this;
    }

    /**
     * Get importChara
     *
     * @return boolean 
     */
    public function getImportChara()
    {
        return $this->importChara;
    }

    /**
     * Set lvlMin
     *
     * @param integer $lvlMin
     * @return Game
     */
    public function setLvlMin($lvlMin)
    {
        $this->lvlMin = $lvlMin;

        return $this;
    }

    /**
     * Get lvlMin
     *
     * @return integer 
     */
    public function getLvlMin()
    {
        return $this->lvlMin;
    }

    /**
     * Set lvlMax
     *
     * @param integer $lvlMax
     * @return Game
     */
    public function setLvlMax($lvlMax)
    {
        $this->lvlMax = $lvlMax;

        return $this;
    }

    /**
     * Get lvlMax
     *
     * @return integer 
     */
    public function getLvlMax()
    {
        return $this->lvlMax;
    }

    /**
     * Set wealthFactor
     *
     * @param string $wealthFactor
     * @return Game
     */
    public function setWealthFactor($wealthFactor)
    {
        $this->wealthFactor = $wealthFactor;

        return $this;
    }

    /**
     * Get wealthFactor
     *
     * @return string 
     */
    public function getWealthFactor()
    {
        return $this->wealthFactor;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Game
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Game
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Game
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateComment
     *
     * @param string $updateComment
     * @return Game
     */
    public function setUpdateComment($updateComment)
    {
        $this->updateComment = $updateComment;

        return $this;
    }

    /**
     * Get updateComment
     *
     * @return string 
     */
    public function getUpdateComment()
    {
        return $this->updateComment;
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return Game
     */
    public function setCreateUser(\PM\UserBundle\Entity\User $createUser)
    {
        $this->createUser = $createUser;

        return $this;
    }

    /**
     * Get createUser
     *
     * @return \PM\UserBundle\Entity\User 
     */
    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * Set updateUser
     *
     * @param \PM\UserBundle\Entity\User $updateUser
     * @return Game
     */
    public function setUpdateUser(\PM\UserBundle\Entity\User $updateUser = null)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return \PM\UserBundle\Entity\User 
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }
}
