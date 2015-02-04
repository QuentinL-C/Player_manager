<?php

namespace PM\CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Level
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\CharacterBundle\Entity\LevelRepository")
 * 
 * @UniqueEntity(fields="level", message="Ce niveau semble déjà exister ...")
 */
class Level
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
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="xpPoints", type="integer")
     */
    private $xpPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="ClassSkillModifier", type="smallint")
     */
    private $classSkillModifier;

    /**
     * @var float
     *
     * @ORM\Column(name="OfClassSkillModifier", type="float")
     */
    private $ofClassSkillModifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gift", type="boolean")
     */
    private $gift;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abilityUp", type="boolean")
     */
    private $abilityUp;

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
     * Set level
     *
     * @param integer $level
     * @return Level
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set xpPoints
     *
     * @param integer $xpPoints
     * @return Level
     */
    public function setXpPoints($xpPoints)
    {
        $this->xpPoints = $xpPoints;

        return $this;
    }

    /**
     * Get xpPoints
     *
     * @return integer 
     */
    public function getXpPoints()
    {
        return $this->xpPoints;
    }

    /**
     * Set classSkillModifier
     *
     * @param integer $classSkillModifier
     * @return Level
     */
    public function setClassSkillModifier($classSkillModifier)
    {
        $this->classSkillModifier = $classSkillModifier;

        return $this;
    }

    /**
     * Get classSkillModifier
     *
     * @return integer 
     */
    public function getClassSkillModifier()
    {
        return $this->classSkillModifier;
    }

    /**
     * Set ofClassSkillModifier
     *
     * @param float $ofClassSkillModifier
     * @return Level
     */
    public function setOfClassSkillModifier($ofClassSkillModifier)
    {
        $this->ofClassSkillModifier = $ofClassSkillModifier;

        return $this;
    }

    /**
     * Get ofClassSkillModifier
     *
     * @return float 
     */
    public function getOfClassSkillModifier()
    {
        return $this->ofClassSkillModifier;
    }

    /**
     * Set gift
     *
     * @param boolean $gift
     * @return Level
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift
     *
     * @return boolean 
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set abilityUp
     *
     * @param boolean $abilityUp
     * @return Level
     */
    public function setAbilityUp($abilityUp)
    {
        $this->abilityUp = $abilityUp;

        return $this;
    }

    /**
     * Get abilityUp
     *
     * @return boolean 
     */
    public function getAbilityUp()
    {
        return $this->abilityUp;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Level
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
     * @return Level
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
     * @return Level
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
     * @return Level
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
     * @return Level
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
