<?php

namespace PM\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \stdClass
     *
     * @ORM\Column(name="diceEntities", type="object")
     */
    private $diceEntities;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="BonusNumbers", type="object")
     */
    private $bonusNumbers;


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
     * Set diceEntities
     *
     * @param \stdClass $diceEntities
     * @return DiceForm
     */
    public function setDiceEntities($diceEntities)
    {
        $this->diceEntities = $diceEntities;

        return $this;
    }

    /**
     * Get diceEntities
     *
     * @return \stdClass 
     */
    public function getDiceEntities()
    {
        return $this->diceEntities;
    }

    /**
     * Set bonusNumbers
     *
     * @param \stdClass $bonusNumbers
     * @return DiceForm
     */
    public function setBonusNumbers($bonusNumbers)
    {
        $this->bonusNumbers = $bonusNumbers;

        return $this;
    }

    /**
     * Get bonusNumbers
     *
     * @return \stdClass 
     */
    public function getBonusNumbers()
    {
        return $this->bonusNumbers;
    }
}
