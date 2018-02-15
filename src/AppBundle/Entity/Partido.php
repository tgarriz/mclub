<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partido
 *
 * @ORM\Table(name="partido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartidoRepository")
 */
class Partido
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rival", type="string", length=255)
     */
    private $rival;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=50)
     */
    private $resultado;

    /**
     * @var bool
     *
     * @ORM\Column(name="ganamos", type="boolean")
     */
    private $ganamos;

    /**
     * @var bool
     *
     * @ORM\Column(name="local", type="boolean")
     */
    private $local;

    /**
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")
     */
    private $equipo;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Jugador", inversedBy="jugadores")
     * @ORM\JoinTable(name="jugadores_partidos")
     */
     private $titulares;

     /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Cambio", mappedBy="partido")
     */
     private $cambios;

     /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Scrum", mappedBy="partido")
     */
     private $scrums;

     /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Line", mappedBy="partido")
     */
     private $lines;

     /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Tackle", mappedBy="partido")
     */
     private $tackles;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Partido
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set rival
     *
     * @param string $rival
     *
     * @return Partido
     */
    public function setRival($rival)
    {
        $this->rival = $rival;

        return $this;
    }

    /**
     * Get rival
     *
     * @return string
     */
    public function getRival()
    {
        return $this->rival;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     *
     * @return Partido
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set ganamos
     *
     * @param boolean $ganamos
     *
     * @return Partido
     */
    public function setGanamos($ganamos)
    {
        $this->ganamos = $ganamos;

        return $this;
    }

    /**
     * Get ganamos
     *
     * @return bool
     */
    public function getGanamos()
    {
        return $this->ganamos;
    }

    /**
     * Set local
     *
     * @param boolean $local
     *
     * @return Partido
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
     * Set equipo
     *
     * @param \AppBundle\Entity\Equipo $equipo
     *
     * @return Partido
     */
    public function setEquipo(\AppBundle\Entity\Equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \AppBundle\Entity\Equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    public function __toString()
    {
      return $this->rival."-".$this->fecha;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->titulares = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cambios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scrums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lines = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tackles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add titulare
     *
     * @param \AppBundle\Entity\Jugador $titulare
     *
     * @return Partido
     */
    public function addTitulare(\AppBundle\Entity\Jugador $titular)
    {
        $this->titulares[] = $titular;

        return $this;
    }

    /**
     * Remove titulare
     *
     * @param \AppBundle\Entity\Jugador $titulare
     */
    public function removeTitulare(\AppBundle\Entity\Jugador $titular)
    {
        $this->titulares->removeElement($titular);
    }

    /**
     * Get titulares
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTitulares()
    {
        return $this->titulares;
    }

    /**
     * Add cambio
     *
     * @param \AppBundle\Entity\Cambio $cambio
     *
     * @return Partido
     */
    public function addCambio(\AppBundle\Entity\Cambio $cambio)
    {
        $this->cambios[] = $cambio;

        return $this;
    }

    /**
     * Remove cambio
     *
     * @param \AppBundle\Entity\Cambio $cambio
     */
    public function removeCambio(\AppBundle\Entity\Cambio $cambio)
    {
        $this->cambios->removeElement($cambio);
    }

    /**
     * Get cambios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCambios()
    {
        return $this->cambios;
    }

    /**
     * Add scrum
     *
     * @param \AppBundle\Entity\Scrum $scrum
     *
     * @return Partido
     */
    public function addScrum(\AppBundle\Entity\Scrum $scrum)
    {
        $this->scrums[] = $scrum;

        return $this;
    }

    /**
     * Remove scrum
     *
     * @param \AppBundle\Entity\Scrum $scrum
     */
    public function removeScrum(\AppBundle\Entity\Scrum $scrum)
    {
        $this->scrums->removeElement($scrum);
    }

    /**
     * Get scrums
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getScrums()
    {
        return $this->scrums;
    }

    /**
     * Add line
     *
     * @param \AppBundle\Entity\Line $line
     *
     * @return Partido
     */
    public function addLine(\AppBundle\Entity\Line $line)
    {
        $this->lines[] = $line;

        return $this;
    }

    /**
     * Remove line
     *
     * @param \AppBundle\Entity\Line $line
     */
    public function removeLine(\AppBundle\Entity\Line $line)
    {
        $this->lines->removeElement($line);
    }

    /**
     * Get lines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * Add tackle
     *
     * @param \AppBundle\Entity\Tackle $tackle
     *
     * @return Partido
     */
    public function addTackle(\AppBundle\Entity\Tackle $tackle)
    {
        $this->tackles[] = $tackle;

        return $this;
    }

    /**
     * Remove tackle
     *
     * @param \AppBundle\Entity\Tackle $tackle
     */
    public function removeTackle(\AppBundle\Entity\Tackle $tackle)
    {
        $this->tackles->removeElement($tackle);
    }

    /**
     * Get tackles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTackles()
    {
        return $this->tackles;
    }
}
