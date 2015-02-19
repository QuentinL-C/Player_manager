<?php

namespace PM\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DiceForm
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\WelcomeBundle\Entity\DiceFormRepository")
 */
class DiceForm
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
     * @ORM\OneToMany(targetEntity="PM\WelcomeBundle\Entity\DiceEntity", mappedBy="diceForm")
     * @ORM\JoinColumn(nullable=false)
     */
    private $diceEntities;

    /**
     * @ORM\OneToMany(targetEntity="PM\WelcomeBundle\Entity\BonusNumber", mappedBy="diceForm")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bonusNumbers;

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
     * Constructor
     */
    public function __construct()
    {
        $this->diceEntities = new ArrayCollection();
        $this->bonusNumbers = new ArrayCollection();
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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return DiceForm
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
     * @return DiceForm
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
     * @return DiceForm
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
     * Add diceEntities
     *
     * @param \PM\WelcomeBundle\Entity\DiceEntity $diceEntity
     * @return DiceForm
     */
    public function addDiceEntity(\PM\WelcomeBundle\Entity\DiceEntity $diceEntity)
    {
        $this->diceEntities[] = $diceEntity;

        return $this;
    }

    /**
     * Get diceEntities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiceEntities()
    {
        return $this->diceEntities;
    }

    /**
     * Remove diceEntities
     *
     * @param \PM\WelcomeBundle\Entity\DiceEntity $diceEntity
     */
    public function removeDiceEntity(\PM\WelcomeBundle\Entity\DiceEntity $diceEntity)
    {
        $this->diceEntities->removeElement($diceEntity);
    }

    /**
     * Add bonusNumbers
     *
     * @param \PM\WelcomeBundle\Entity\BonusNumber $bonusNumber
     * @return DiceForm
     */
    public function addBonusNumber(\PM\WelcomeBundle\Entity\BonusNumber $bonusNumber)
    {
        $this->bonusNumbers[] = $bonusNumber;

        return $this;
    }

    /**
     * Get bonusNumbers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBonusNumbers()
    {
        return $this->bonusNumbers;
    }

    /**
     * Remove bonusNumbers
     *
     * @param \PM\WelcomeBundle\Entity\BonusNumber $bonusNumber
     */
    public function removeBonusNumber(\PM\WelcomeBundle\Entity\BonusNumber $bonusNumber)
    {
        $this->bonusNumbers->removeElement($bonusNumber);
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return DiceForm
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
     * @return DiceForm
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
