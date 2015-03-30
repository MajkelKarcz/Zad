<?php

namespace My\GraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heroes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Heroes
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
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp", type="integer")
     */
    private $exp;

    /**
     * @var integer
     *
     * @ORM\Column(name="str", type="integer")
     */
    private $str;

    /**
     * @var integer
     *
     * @ORM\Column(name="stamina", type="integer")
     */
    private $stamina;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity="Items", inversedBy="heroes")
     *@ORM\JoinColumn(name="Items_id", referencedColumnName="id")
     * 
     */
    private $item1;

    /**
    * @ORM\ManyToOne(targetEntity="Items", inversedBy="heroes")
     *@ORM\JoinColumn(name="Items_id2", referencedColumnName="id")
     */
    private $item2;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="item3", type="integer")
     */
    private $item3;
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
     * @return Heroes
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
     * Set hp
     *
     * @param integer $hp
     * @return Heroes
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return integer 
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     * @return Heroes
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set str
     *
     * @param integer $str
     * @return Heroes
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return integer 
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set stamina
     *
     * @param integer $stamina
     * @return Heroes
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get stamina
     *
     * @return integer 
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Heroes
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
     * Set item1
     *
     * @param integer $item1
     * @return Heroes
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;

        return $this;
    }

    /**
     * Get item1
     *
     * @return integer 
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * Set item2
     *
     * @param integer $item2
     * @return Heroes
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;

        return $this;
    }

    /**
     * Get item2
     *
     * @return integer 
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set item3
     *
     * @param integer $item3
     * @return Heroes
     */
    public function setItem3($item3)
    {
        $this->item3 = $item3;

        return $this;
    }

    /**
     * Get item3
     *
     * @return integer 
     */
    public function getItem3()
    {
        return $this->item3;
    }
}
