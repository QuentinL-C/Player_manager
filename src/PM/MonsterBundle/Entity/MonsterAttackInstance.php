<?php

namespace PM\MonsterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MonsterAttackInstance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\MonsterBundle\Entity\MonsterAttackInstanceRepository")
 */
class MonsterAttackInstance
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
     * @var integer
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="bab", type="smallint")
     */
    private $bab;

    /**
     * @ORM\ManyToOne(targetEntity="PM\WeaponBundle\Entity\WeaponType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $weaponType;

    /**
     * @ORM\ManyToOne(targetEntity="PM\WelcomeBundle\Entity\DiceForm")
     * @ORM\JoinColumn(nullable=false)
     */
    private $damageForm;

    /**
     * @ORM\ManyToOne(targetEntity="PM\WelcomeBundle\Entity\DiceForm")
     * @ORM\JoinColumn(nullable=true)
     */
    private $damageCriticForm;

    /**
     * @var string
     * @Assert\Length(
     *      max = "1000",
     *      maxMessage = "Votre champ 'Effets secondaires' ne doit pas dépasser {{ limit }} caractères."
     * )
     *
     * @ORM\Column(name="damageSideEffect", type="text", nullable=true)
     */
    private $damageSideEffect;

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
     * Set name
     *
     * @param string $name
     * @return MonsterAttackInstance
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
     * Set bab
     *
     * @param integer $bab
     * @return MonsterAttackInstance
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
     * Set weaponType
     *
     * @param \stdClass $weaponType
     * @return MonsterAttackInstance
     */
    public function setWeaponType($weaponType)
    {
        $this->weaponType = $weaponType;

        return $this;
    }

    /**
     * Get weaponType
     *
     * @return \stdClass 
     */
    public function getWeaponType()
    {
        return $this->weaponType;
    }

    /**
     * Set damageForm
     *
     * @param \stdClass $damageForm
     * @return MonsterAttackInstance
     */
    public function setDamageForm($damageForm)
    {
        $this->damageForm = $damageForm;

        return $this;
    }

    /**
     * Get damageForm
     *
     * @return \stdClass 
     */
    public function getDamageForm()
    {
        return $this->damageForm;
    }

    /**
     * Set damageCriticForm
     *
     * @param \stdClass $damageCriticForm
     * @return MonsterAttackInstance
     */
    public function setDamageCriticForm($damageCriticForm)
    {
        $this->damageCriticForm = $damageCriticForm;

        return $this;
    }

    /**
     * Get damageCriticForm
     *
     * @return \stdClass 
     */
    public function getDamageCriticForm()
    {
        return $this->damageCriticForm;
    }

    /**
     * Set damageSideEffect
     *
     * @param string $damageSideEffect
     * @return MonsterAttackInstance
     */
    public function setDamageSideEffect($damageSideEffect)
    {
        $this->damageSideEffect = $damageSideEffect;

        return $this;
    }

    /**
     * Get damageSideEffect
     *
     * @return string 
     */
    public function getDamageSideEffect()
    {
        return $this->damageSideEffect;
    }
}
