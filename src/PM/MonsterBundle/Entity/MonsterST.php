<?php

namespace PM\MonsterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MonsterST
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\MonsterBundle\Entity\MonsterSTRepository")
 */
class MonsterST
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
     * @ORM\Column(name="fortitude", type="integer", options={"default" = 0})
     */
    private $fortitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="reflex", type="integer", options={"default" = 0})
     */
    private $reflex;

    /**
     * @var integer
     *
     * @ORM\Column(name="will", type="integer", options={"default" = 0})
     */
    private $will;

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
     * Set fortitude
     *
     * @param integer $fortitude
     * @return MonsterST
     */
    public function setFortitude($fortitude)
    {
        $this->fortitude = $fortitude;

        return $this;
    }

    /**
     * Get fortitude
     *
     * @return integer 
     */
    public function getFortitude()
    {
        return $this->fortitude;
    }

    /**
     * Set reflex
     *
     * @param integer $reflex
     * @return MonsterST
     */
    public function setReflex($reflex)
    {
        $this->reflex = $reflex;

        return $this;
    }

    /**
     * Get reflex
     *
     * @return integer 
     */
    public function getReflex()
    {
        return $this->reflex;
    }

    /**
     * Set will
     *
     * @param integer $will
     * @return MonsterST
     */
    public function setWill($will)
    {
        $this->will = $will;

        return $this;
    }

    /**
     * Get will
     *
     * @return integer 
     */
    public function getWill()
    {
        return $this->will;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return MonsterST
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
     * @return MonsterST
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
     * @return MonsterST
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
     * @return MonsterST
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
     * @return MonsterST
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
