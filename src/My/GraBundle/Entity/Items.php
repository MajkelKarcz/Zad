<?php

namespace My\GraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Items
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
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="str_bonus", type="integer")
     */
    private $strBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="hp_bonus", type="integer")
     */
    private $hpBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="stamina_bonus", type="integer")
     */
    private $staminaBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;
    
    /**
     * 
     *
     * @ORM\OneToMany(targetEntity="Heroes", mappedBy="Items")
     */
    private $heroes;

    public function __construct() {
        $this->heroes=new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Items
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
     * Set strBonus
     *
     * @param integer $strBonus
     * @return Items
     */
    public function setStrBonus($strBonus)
    {
        $this->strBonus = $strBonus;

        return $this;
    }

    /**
     * Get strBonus
     *
     * @return integer 
     */
    public function getStrBonus()
    {
        return $this->strBonus;
    }

    /**
     * Set hpBonus
     *
     * @param integer $hpBonus
     * @return Items
     */
    public function setHpBonus($hpBonus)
    {
        $this->hpBonus = $hpBonus;

        return $this;
    }

    /**
     * Get hpBonus
     *
     * @return integer 
     */
    public function getHpBonus()
    {
        return $this->hpBonus;
    }

    /**
     * Set staminaBonus
     *
     * @param integer $staminaBonus
     * @return Items
     */
    public function setStaminaBonus($staminaBonus)
    {
        $this->staminaBonus = $staminaBonus;

        return $this;
    }

    /**
     * Get staminaBonus
     *
     * @return integer 
     */
    public function getStaminaBonus()
    {
        return $this->staminaBonus;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Items
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set heroes
     *
     * @param integer $heroes
     * @return Items
     */
    public function setHeroes($heroes)
    {
        $this->heroes = $heroes;

        return $this;
    }

    /**
     * Get heroes
     *
     * @return integer 
     */
    public function getHeroes()
    {
        return $this->heroes;
    }

    /**
     * Add heroes
     *
     * @param \My\GraBundle\Entity\Heroes $heroes
     * @return Items
     */
    public function addHero(\My\GraBundle\Entity\Heroes $heroes)
    {
        $this->heroes[] = $heroes;

        return $this;
    }

    /**
     * Remove heroes
     *
     * @param \My\GraBundle\Entity\Heroes $heroes
     */
    public function removeHero(\My\GraBundle\Entity\Heroes $heroes)
    {
        $this->heroes->removeElement($heroes);
    }
    public function __toString() {
        return ($this->getName().' '. $this->getWeight());
    }
}
