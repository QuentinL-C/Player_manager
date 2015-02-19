<?php

namespace PM\MonsterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Monster
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\MonsterBundle\Entity\MonsterRepository")
 * 
 * @UniqueEntity(fields="name", message="Un monstre semble déjà porter ce nom ...")
 */
class Monster
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
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "1",
     *      max = "45",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=255, nullable=false, unique=true)
     */
    private $slug;
    
    /**
     * @var string
     * @Assert\Length(
     *      max = "10000",
     *      maxMessage = "Votre description ne doit pas dépasser {{ limit }} caractères."
     * )
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="PM\WelcomeBundle\Entity\DiceForm", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $hpForm;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="hpAverage", type="smallint", options={"default" = 0}, nullable=false)
     */
    private $hpAverage;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="bab", type="smallint", nullable=false, options={"default" = 0})
     */
    private $bab;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="grappleModifier", type="smallint", nullable=false, options={"default" = 0})
     */
    private $grappleModifier;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="ac", type="smallint", nullable=false, options={"default" = 0})
     */
    private $ac;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="ffAC", type="smallint", nullable=false, options={"default" = 0})
     */
    private $ffAC;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="touchAC", type="smallint", nullable=false, options={"default" = 0})
     */
    private $touchAC;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = "1",
     *      minMessage = "Votre monstre ne peut pas avoir une vitesse négative ou nulle."
     * )
     *
     * @ORM\Column(name="speed", type="float")
     */
    private $speed;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = "0",
     *      minMessage = "Votre monstre ne peut pas avoir une taille négative."
     * )
     *
     * @ORM\Column(name="spaceOccupied", type="float")
     */
    private $spaceOccupied;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = "0",
     *      minMessage = "Votre monstre ne peut pas avoir un espace d'influence négatif."
     * )
     *
     * @ORM\Column(name="areaLying", type="float")
     */
    private $areaLying;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="initiative", type="smallint", nullable=false, options={"default" = 0})
     */
    private $initiative;

    /**
     * @var string
     * @Assert\Length(
     *      max = "10000",
     *      maxMessage = "Votre Organisation Sociale ne doit pas dépasser {{ limit }} caractères."
     * )
     *
     * @ORM\Column(name="socialOrganisation", type="text", nullable=true)
     */
    private $socialOrganisation;

    /**
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="powerfullFactor", type="smallint", nullable=false, options={"default" = 0})
     */
    private $powerfullFactor;

    /**
     * @ORM\ManyToMany(targetEntity="PM\GiftBundle\Entity\Gift")
     * @ORM\JoinColumn(nullable=true)
     */
    private $gifts;

    /**
     * @ORM\ManyToMany(targetEntity="PM\CharacterBundle\Entity\Language")
     * @ORM\JoinColumn(nullable=true)
     */
    private $languages;

    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\Alignment")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $alignment;

    /**
     * @ORM\ManyToOne(targetEntity="PM\MonsterBundle\Entity\Environment")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $environment;

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
        $this->languages = New ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Monster
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Add languages
     *
     * @param \PM\CharacterBundle\Entity\Language $language
     * @return Monster
     */
    public function addLanguage(\PM\CharacterBundle\Entity\Language $language)
    {
        $this->languages[] = $language;
        $language->setMonster($this);

        return $this;
    }

    /**
     * Get languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Remove language
     *
     * @param \PM\CharacterBundle\Entity\Language $language
     */
    public function removeLanguage(\PM\CharacterBundle\Entity\Language $language)
    {
        $this->languages->removeElement($language);
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Monster
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Monster
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Monster
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
     * @return Monster
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
     * @return Monster
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
     * @return Monster
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
     * @return Monster
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

    /**
     * Set initiative
     *
     * @param integer $initiative
     * @return Monster
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative
     *
     * @return integer 
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set hpAverage
     *
     * @param integer $hpAverage
     * @return Monster
     */
    public function setHpAverage($hpAverage)
    {
        $this->hpAverage = $hpAverage;

        return $this;
    }

    /**
     * Get hpAverage
     *
     * @return integer 
     */
    public function getHpAverage()
    {
        return $this->hpAverage;
    }

    /**
     * Set bab
     *
     * @param integer $bab
     * @return Monster
     */
    public function setBab($bab)
    {
        $this->bab = $bab;

        return $this;
    }

    /**
     * Get bab
     *
     * @return integer 
     */
    public function getBab()
    {
        return $this->bab;
    }

    /**
     * Set grappleModifier
     *
     * @param integer $grappleModifier
     * @return Monster
     */
    public function setGrappleModifier($grappleModifier)
    {
        $this->grappleModifier = $grappleModifier;

        return $this;
    }

    /**
     * Get grappleModifier
     *
     * @return integer 
     */
    public function getGrappleModifier()
    {
        return $this->grappleModifier;
    }

    /**
     * Set ac
     *
     * @param integer $ac
     * @return Monster
     */
    public function setAc($ac)
    {
        $this->ac = $ac;

        return $this;
    }

    /**
     * Get ac
     *
     * @return integer 
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * Set ffAC
     *
     * @param integer $ffAC
     * @return Monster
     */
    public function setFfAC($ffAC)
    {
        $this->ffAC = $ffAC;

        return $this;
    }

    /**
     * Get ffAC
     *
     * @return integer 
     */
    public function getFfAC()
    {
        return $this->ffAC;
    }

    /**
     * Set touchAC
     *
     * @param integer $touchAC
     * @return Monster
     */
    public function setTouchAC($touchAC)
    {
        $this->touchAC = $touchAC;

        return $this;
    }

    /**
     * Get touchAC
     *
     * @return integer 
     */
    public function getTouchAC()
    {
        return $this->touchAC;
    }

    /**
     * Set speed
     *
     * @param float $speed
     * @return Monster
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return float 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set spaceOccupied
     *
     * @param float $spaceOccupied
     * @return Monster
     */
    public function setSpaceOccupied($spaceOccupied)
    {
        $this->spaceOccupied = $spaceOccupied;

        return $this;
    }

    /**
     * Get spaceOccupied
     *
     * @return float 
     */
    public function getSpaceOccupied()
    {
        return $this->spaceOccupied;
    }

    /**
     * Set areaLying
     *
     * @param float $areaLying
     * @return Monster
     */
    public function setAreaLying($areaLying)
    {
        $this->areaLying = $areaLying;

        return $this;
    }

    /**
     * Get areaLying
     *
     * @return float 
     */
    public function getAreaLying()
    {
        return $this->areaLying;
    }

    /**
     * Set socialOrganisation
     *
     * @param string $socialOrganisation
     * @return Monster
     */
    public function setSocialOrganisation($socialOrganisation)
    {
        $this->socialOrganisation = $socialOrganisation;

        return $this;
    }

    /**
     * Get socialOrganisation
     *
     * @return string 
     */
    public function getSocialOrganisation()
    {
        return $this->socialOrganisation;
    }

    /**
     * Set powerfullFactor
     *
     * @param integer $powerfullFactor
     * @return Monster
     */
    public function setPowerfullFactor($powerfullFactor)
    {
        $this->powerfullFactor = $powerfullFactor;

        return $this;
    }

    /**
     * Get powerfullFactor
     *
     * @return integer 
     */
    public function getPowerfullFactor()
    {
        return $this->powerfullFactor;
    }

    /**
     * Set alignment
     *
     * @param \PM\CharacterBundle\Entity\Alignment $alignment
     * @return Monster
     */
    public function setAlignment(\PM\CharacterBundle\Entity\Alignment $alignment = null)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get alignment
     *
     * @return \PM\CharacterBundle\Entity\Alignment 
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Set environment
     *
     * @param \PM\MonsterBundle\Entity\Environment $environment
     * @return Monster
     */
    public function setEnvironment(\PM\MonsterBundle\Entity\Environment $environment = null)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return \PM\MonsterBundle\Entity\Environment 
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set hpForm
     *
     * @param \PM\WelcomeBundle\Entity\DiceForm $hpForm
     * @return Monster
     */
    public function setHpForm(\PM\WelcomeBundle\Entity\DiceForm $hpForm)
    {
        $this->hpForm = $hpForm;

        return $this;
    }

    /**
     * Get hpForm
     *
     * @return \PM\WelcomeBundle\Entity\DiceForm 
     */
    public function getHpForm()
    {
        return $this->hpForm;
    }

    /**
     * Add gifts
     *
     * @param \PM\GiftBundle\Entity\Gift $gift
     * @return Monster
     */
    public function addGift(\PM\GiftBundle\Entity\Gift $gift)
    {
        $this->gifts[] = $gift;

        return $this;
    }

    /**
     * Remove gifts
     *
     * @param \PM\GiftBundle\Entity\Gift $gift
     */
    public function removeGift(\PM\GiftBundle\Entity\Gift $gift)
    {
        $this->gifts->removeElement($gift);
    }

    /**
     * Get gifts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGifts()
    {
        return $this->gifts;
    }
}
