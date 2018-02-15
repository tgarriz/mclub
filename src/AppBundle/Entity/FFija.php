<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /* @MappedSuperclass */
abstract class FFija
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
     * @var bool
     *
     * @ORM\Column(name="local", type="boolean")
     */
    protected $local;

    /**
     * @var int
     *
     * @ORM\Column(name="sector", type="integer")
     */
    protected $sector;

    /**
     * @var bool
     *
     * @ORM\Column(name="ganado", type="boolean")
     */
    protected $ganado;

    /**
    * @ORM\ManyToOne(targetEntity="Partido")
    * @ORM\JoinColumn(name="partido_id", referencedColumnName="id")
    */
    protected $partido;


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
     * Set local
     *
     * @param boolean $local
     *
     * @return FFija
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return bool
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set sector
     *
     * @param integer $sector
     *
     * @return FFija
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return int
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set ganado
     *
     * @param boolean $ganado
     *
     * @return FFija
     */
    public function setGanado($ganado)
    {
        $this->ganado = $ganado;

        return $this;
    }

    /**
     * Get ganado
     *
     * @return bool
     */
    public function getGanado()
    {
        return $this->ganado;
    }

    /**
     * Set partido
     *
     * @param \stdClass $partido
     *
     * @return FFija
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return \stdClass
     */
    public function getPartido()
    {
        return $this->partido;
    }
}
