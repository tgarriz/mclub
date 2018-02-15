<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tackle
 *
 * @ORM\Table(name="tackle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TackleRepository")
 */
class Tackle
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
    protected $partido;

    /**
     * @ORM\ManyToOne(targetEntity="Jugador")
     * @ORM\JoinColumn(name="jugador_id", referencedColumnName="id")
     */
    private $jugador;

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
     * Set partido
     *
     * @param \stdClass $partido
     *
     * @return Tackle
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

    /**
     * Set jugador
     *
     * @param \stdClass $jugador
     *
     * @return Tackle
     */
    public function setJugador($jugador)
    {
        $this->jugador = $jugador;

        return $this;
    }

    /**
     * Get jugador
     *
     * @return \stdClass
     */
    public function getJugador()
    {
        return $this->jugador;
    }
}
