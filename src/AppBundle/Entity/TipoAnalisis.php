<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * TipoAnalisis
 *
 * @ORM\Table(name="tipo_analisis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoAnalisisRepository")
 */
class TipoAnalisis
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="metodo", type="string", length=50)
     */
    private $metodo;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ItemTipoAnalisis", mappedBy="tipoAnalisis")
     */
    private $itemTipoAnalisis;

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
     * Set nombre
     *
     * @param string $nombre
     * @return TipoAnalisis
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

    /**
     * Set metodo
     *
     * @param string $metodo
     * @return TipoAnalisis
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    /**
     * Get metodo
     *
     * @return string
     */
    public function getMetodo()
    {
        return $this->metodo;
    }

    public function getTipoAnalisis()
    {
        return $this->nombre;

    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itemTipoAnalisis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add itemTipoAnalisis
     *
     * @param \AppBundle\Entity\ItemTipoAnalisis $itemTipoAnalisis
     * @return TipoAnalisis
     */
    public function addItemTipoAnalisi(\AppBundle\Entity\ItemTipoAnalisis $itemTipoAnalisis)
    {
        $this->itemTipoAnalisis[] = $itemTipoAnalisis;

        return $this;
    }

    /**
     * Remove itemTipoAnalisis
     *
     * @param \AppBundle\Entity\ItemTipoAnalisis $itemTipoAnalisis
     */
    public function removeItemTipoAnalisi(\AppBundle\Entity\ItemTipoAnalisis $itemTipoAnalisis)
    {
        $this->itemTipoAnalisis->removeElement($itemTipoAnalisis);
    }

    /**
     * Get itemTipoAnalisis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItemTipoAnalisis()
    {
        return $this->itemTipoAnalisis;
    }


    public function __toString()
    {
        return $this->getNombre();
    }
}
