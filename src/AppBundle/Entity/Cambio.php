<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cambio
 *
 * @ORM\Table(name="cambio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CambioRepository")
 */
class Cambio
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
     * @ORM\ManyToOne(targetEntity="Partido")
     * @ORM\JoinColumn(name="partido_id", referencedColumnName="id")
     */
    private $partido;

    /**
     * @ORM\ManyToOne(targetEntity="Jugador")
     * @ORM\JoinColumn(name="j_sale_id", referencedColumnName="id")
     */
    private $j_sale;

    /**
     * @ORM\ManyToOne(targetEntity="Jugador")
     * @ORM\JoinColumn(name="j_entra_id", referencedColumnName="id")
     */
    private $j_entra;

    /**
     * @var int
     *
     * @ORM\Column(name="minuto", type="integer", unique=false)
     */
    protected $minuto;

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
     * Set minuto
     *
     * @param integer $minuto
     *
     * @return Cambio
     */
    public function setMinuto($minuto)
    {
        $this->minuto = $minuto;

        return $this;
    }

    /**
     * Get minuto
     *
     * @return integer
     */
    public function getMinuto()
    {
        return $this->minuto;
    }

    /**
     * Set partido
     *
     * @param \AppBundle\Entity\Partido $partido
     *
     * @return Cambio
     */
    public function setPartido(\AppBundle\Entity\Partido $partido = null)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return \AppBundle\Entity\Partido
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set jSale
     *
     * @param \AppBundle\Entity\Jugador $jSale
     *
     * @return Cambio
     */
    public function setJSale(\AppBundle\Entity\Jugador $jSale = null)
    {
        $this->j_sale = $jSale;

        return $this;
    }

    /**
     * Get jSale
     *
     * @return \AppBundle\Entity\Jugador
     */
    public function getJSale()
    {
        return $this->j_sale;
    }

    /**
     * Set jEntra
     *
     * @param \AppBundle\Entity\Jugador $jEntra
     *
     * @return Cambio
     */
    public function setJEntra(\AppBundle\Entity\Jugador $jEntra = null)
    {
        $this->j_entra = $jEntra;

        return $this;
    }

    /**
     * Get jEntra
     *
     * @return \AppBundle\Entity\Jugador
     */
    public function getJEntra()
    {
        return $this->j_entra;
    }
}
