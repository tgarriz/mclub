<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /* @MappedSuperclass */
 abstract class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nyap", type="string", length=255)
     */
    protected $nyap;

    /**
     * @var int
     *
     * @ORM\Column(name="dni", type="integer", unique=true)
     */
    protected $dni;

    /**
     * @var bool
     *
     * @ORM\Column(name="foward", type="boolean")
     */
    protected $foward;

    /**
     * @var bool
     *
     * @ORM\Column(name="back", type="boolean")
     */
    protected $back;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnac", type="datetime")
     */
    protected $fnac;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nyap
     *
     * @param string $nyap
     *
     * @return Persona
     */
    public function setNyap($nyap)
    {
        $this->nyap = $nyap;

        return $this;
    }

    /**
     * Get nyap
     *
     * @return string
     */
    public function getNyap()
    {
        return $this->nyap;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     *
     * @return Persona
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return int
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set foward
     *
     * @param boolean $foward
     *
     * @return Persona
     */
    public function setFoward($foward)
    {
        $this->foward = $foward;

        return $this;
    }

    /**
     * Get foward
     *
     * @return bool
     */
    public function getFoward()
    {
        return $this->foward;
    }

    /**
     * Set back
     *
     * @param boolean $back
     *
     * @return Persona
     */
    public function setBack($back)
    {
        $this->back = $back;

        return $this;
    }

    /**
     * Get back
     *
     * @return bool
     */
    public function getBack()
    {
        return $this->back;
    }

    /**
     * Set fnac
     *
     * @param \DateTime $fnac
     *
     * @return Persona
     */
    public function setFnac($fnac)
    {
        $this->fnac = $fnac;

        return $this;
    }

    /**
     * Get fnac
     *
     * @return \DateTime
     */
    public function getFnac()
    {
        return $this->fnac;
    }
}
