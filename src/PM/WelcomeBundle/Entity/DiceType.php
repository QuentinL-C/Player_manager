<?php

namespace PM\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiceType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\WelcomeBundle\Entity\DiceTypeRepository")
 */
class DiceType
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
     * @ORM\Column(name="dice", type="smallint")
     */
    private $dice;


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
     * Set dice
     *
     * @param integer $dice
     * @return DiceType
     */
    public function setDice($dice)
    {
        $this->dice = $dice;

        return $this;
    }

    /**
     * Get dice
     *
     * @return integer 
     */
    public function getDice()
    {
        return $this->dice;
    }
}
