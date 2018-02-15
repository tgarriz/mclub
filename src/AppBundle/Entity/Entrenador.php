<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenador
 *
 * @ORM\Table(name="entrenador")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntrenadorRepository")
 */
class Entrenador extends Persona
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
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")
     */
     private $equipo;

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
     * Set equipo
     *
     * @param \AppBundle\Entity\Equipo $equipo
     *
     * @return Entrenador
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
}
