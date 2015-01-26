<?php

namespace PM\CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ClassBAB
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\CharacterBundle\Entity\ClassBABRepository")
 */
class ClassBAB
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
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\ClassDnD", inversedBy="babs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classDnD;

    /**
     * @var integer
     *
     * @ORM\Column(name="lvl", type="smallint")
     */
    private $lvl;

    /**
     * @var integer
     *
     * @ORM\Column(name="attackNb", type="smallint")
     */
    private $attackNb;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="smallint")
     */
    private $value;

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
     * Set lvl
     *
     * @param integer $lvl
     * @return ClassBAB
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set attackNb
     *
     * @param integer $attackNb
     * @return ClassBAB
     */
    public function setAttackNb($attackNb)
    {
        $this->attackNb = $attackNb;

        return $this;
    }

    /**
     * Get attackNb
     *
     * @return integer 
     */
    public function getAttackNb()
    {
        return $this->attackNb;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return ClassBAB
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return ClassBAB
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
     * @return ClassBAB
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
     * @return ClassBAB
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
     * Set classDnD
     *
     * @param \PM\CharacterBundle\Entity\ClassDnD $classDnD
     * @return ClassBAB
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
     * @return ClassBAB
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
     * @return ClassBAB
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
