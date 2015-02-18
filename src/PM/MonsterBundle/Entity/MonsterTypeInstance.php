<?php

namespace PM\MonsterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MonsterTypeInstance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\MonsterBundle\Entity\MonsterTypeInstanceRepository")
 */
class MonsterTypeInstance
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
     * @ORM\ManyToOne(targetEntity="PM\MonsterBundle\Entity\Monster")
     * @ORM\JoinColumn(nullable=false)
     */
    private $monster;

    /**
     * @ORM\ManyToOne(targetEntity="PM\MonsterBundle\Entity\MonsterType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $monsterType;

    /**
     * @ORM\ManyToOne(targetEntity="PM\MonsterBundle\Entity\MonsterSubType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $monsterSubType;

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
     * Set monster
     *
     * @param \stdClass $monster
     * @return MonsterTypeInstance
     */
    public function setMonster($monster)
    {
        $this->monster = $monster;

        return $this;
    }

    /**
     * Get monster
     *
     * @return \stdClass 
     */
    public function getMonster()
    {
        return $this->monster;
    }

    /**
     * Set monsterType
     *
     * @param \stdClass $monsterType
     * @return MonsterTypeInstance
     */
    public function setMonsterType($monsterType)
    {
        $this->monsterType = $monsterType;

        return $this;
    }

    /**
     * Get monsterType
     *
     * @return \stdClass 
     */
    public function getMonsterType()
    {
        return $this->monsterType;
    }

    /**
     * Set monsterSubType
     *
     * @param \stdClass $monsterSubType
     * @return MonsterTypeInstance
     */
    public function setMonsterSubType($monsterSubType)
    {
        $this->monsterSubType = $monsterSubType;

        return $this;
    }

    /**
     * Get monsterSubType
     *
     * @return \stdClass 
     */
    public function getMonsterSubType()
    {
        return $this->monsterSubType;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return MonsterTypeInstance
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
     * @return MonsterTypeInstance
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
     * @return MonsterTypeInstance
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
     * @return MonsterTypeInstance
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
     * @return MonsterTypeInstance
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
