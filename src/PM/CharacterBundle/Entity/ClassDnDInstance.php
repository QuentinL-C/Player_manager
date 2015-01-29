<?php

namespace PM\CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ClassDnDInstance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\CharacterBundle\Entity\ClassDnDInstanceRepository")
 */
class ClassDnDInstance
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
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\CharacterUsed")
     * @ORM\JoinColumn(nullable=false)
     */
    private $characterUsed;

    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\ClassDnD")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classDnD;

    /**
     * @var integer
     * @Assert\Range(
     *      min = "0",
     *      minMessage = "Votre personnage ne peut pas avoir un niveau négatif."
     * )
     *
     * @ORM\Column(name="level", type="smallint", options={"default" = 0}, nullable=false)
     */
    private $level;

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
     * @return ClassDnDInstance
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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return ClassDnDInstance
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
     * @return ClassDnDInstance
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
     * @return ClassDnDInstance
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
     * Set characterUsed
     *
     * @param \PM\CharacterBundle\Entity\CharacterUsed $characterUsed
     * @return ClassDnDInstance
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
     * Set classDnD
     *
     * @param \PM\CharacterBundle\Entity\ClassDnD $classDnD
     * @return ClassDnDInstance
     */
    public function setClassDnD(\PM\CharacterBundle\Entity\ClassDnD $classDnD)
    {
        $this->classDnD = $classDnD;

        return $this;
    }

    /**
     * Get classDnD
     *
     * @return \PM\CharacterBundle\Entity\ClassDnD 
     */
    public function getClassDnD()
    {
        return $this->classDnD;
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return ClassDnDInstance
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
     * @return ClassDnDInstance
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
