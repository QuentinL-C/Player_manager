<?php

namespace PM\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DiceEntity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\WelcomeBundle\Entity\DiceEntityRepository")
 */
class DiceEntity
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
     * @ORM\ManyToOne(targetEntity="PM\WelcomeBundle\Entity\DiceForm", inversedBy="diceEntities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $diceForm;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="DiceNumber", type="smallint", options={"default" = 0}, nullable=false)
     */
    private $diceNumber;

    /**
     * @ORM\ManyToOne(targetEntity="PM\WelcomeBundle\Entity\DiceType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $diceType;

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
     * Set diceNumber
     *
     * @param integer $diceNumber
     * @return DiceEntity
     */
    public function setDiceNumber($diceNumber)
    {
        $this->diceNumber = $diceNumber;

        return $this;
    }

    /**
     * Get diceNumber
     *
     * @return integer 
     */
    public function getDiceNumber()
    {
        return $this->diceNumber;
    }

    /**
     * Set diceType
     *
     * @param \stdClass $diceType
     * @return DiceEntity
     */
    public function setDiceType($diceType)
    {
        $this->diceType = $diceType;

        return $this;
    }

    /**
     * Get diceType
     *
     * @return \stdClass 
     */
    public function getDiceType()
    {
        return $this->diceType;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return DiceEntity
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
     * @return DiceEntity
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
     * @return DiceEntity
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
     * Set diceForm
     *
     * @param \PM\WelcomeBundle\Entity\DiceForm $diceForm
     * @return DiceEntity
     */
    public function setDiceForm(\PM\WelcomeBundle\Entity\DiceForm $diceForm)
    {
        $this->diceForm = $diceForm;

        return $this;
    }

    /**
     * Get diceForm
     *
     * @return \PM\WelcomeBundle\Entity\DiceForm 
     */
    public function getDiceForm()
    {
        return $this->diceForm;
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return DiceEntity
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
     * @return DiceEntity
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
