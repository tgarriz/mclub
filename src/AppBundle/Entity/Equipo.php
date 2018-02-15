<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipoRepository")
 */
class Equipo
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
     * @var int
     *
     * @ORM\Column(name="categoria", type="integer")
     */
    private $categoria;

    /**
     * @var int
     *
     * @ORM\Column(name="anio", type="integer")
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Partido", mappedBy="equipo")
     */
     private $partidos;

     /**
      * One Product has Many Features.
      * @ORM\OneToMany(targetEntity="Entrenador", mappedBy="equipo")
      */
     private $entrenadores;

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
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Equipo
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return int
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     *
     * @return Equipo
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return int
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Equipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString()
    {
      return $this->nombre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->partidos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->entrenadores = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add partido
     *
     * @param \AppBundle\Entity\Partido $partido
     *
     * @return Equipo
     */
    public function addPartido(\AppBundle\Entity\Partido $partido)
    {
        $this->partidos[] = $partido;

        return $this;
    }

    /**
     * Remove partido
     *
     * @param \AppBundle\Entity\Partido $partido
     */
    public function removePartido(\AppBundle\Entity\Partido $partido)
    {
        $this->partidos->removeElement($partido);
    }

    /**
     * Get partidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartidos()
    {
        return $this->partidos;
    }

    /**
     * Add entrenador
     *
     * @param \AppBundle\Entity\Entrenador $entrenador
     *
     * @return Equipo
     */
    public function addEntrenadore(\AppBundle\Entity\Entrenador $entrenador)
    {
        $this->entrenadores[] = $entrenador;

        return $this;
    }

    /**
     * Remove entrenadore
     *
     * @param \AppBundle\Entity\Entrenador $entrenador
     */
    public function removeEntrenadore(\AppBundle\Entity\Entrenador $entrenador)
    {
        $this->entrenadores->removeElement($entrenador);
    }

    /**
     * Get entrenadores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntrenadores()
    {
        return $this->entrenadores;
    }
}
