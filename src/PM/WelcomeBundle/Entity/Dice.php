<?php

namespace PM\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\WelcomeBundle\Entity\DiceRepository")
 */
class Dice
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
     * @ORM\Column(name="DiceType", type="smallint")
     */
    private $diceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiceResult", type="smallint")
     */
    private $diceResult;
    
    /**
     * @ORM\ManyToOne(targetEntity="PM\GameBundle\Entity\Game")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;
    
    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\CharacterUsed")
     * @ORM\JoinColumn(nullable=false)
     */
    private $characterUsed;

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
     * Set diceType
     *
     * @param integer $diceType
     * @return Dice
     */
    public function setDiceType($diceType)
    {
        $this->diceType = $diceType;

        return $this;
    }

    /**
     * Get diceType
     *
     * @return integer 
     */
    public function getDiceType()
    {
        return $this->diceType;
    }

    /**
     * Set diceResult
     *
     * @param integer $diceResult
     * @return Dice
     */
    public function setDiceResult($diceResult)
    {
        $this->diceResult = $diceResult;

        return $this;
    }

    /**
     * Get diceResult
     *
     * @return integer 
     */
    public function getDiceResult()
    {
        return $this->diceResult;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Dice
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
     * @return Dice
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
     * @return Dice
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
     * Set game
     *
     * @param \PM\GameBundle\Entity\Game $game
     * @return Dice
     */
    public function setGame(\PM\GameBundle\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \PM\GameBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set characterUsed
     *
     * @param \PM\CharacterBundle\Entity\CharacterUsed $characterUsed
     * @return Dice
     */
    public function setCharacterUsed(\PM\CharacterBundle\Entity\CharacterUsed $characterUsed)
    {
        $this->characterUsed = $characterUsed;

        return $this;
    }

    /**
     * Get characterUsed
     *
     * @return \PM\CharacterBundle\Entity\CharacterUsed 
     */
    public function getCharacterUsed()
    {
        return $this->characterUsed;
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return Dice
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
     * @return Dice
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
