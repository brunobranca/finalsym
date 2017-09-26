<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use AppBundle\Entity\TipoAnalisis;

/**
 * ItemTipoAnalisis
 *
 * @ORM\Table(name="item_tipo_analisis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemTipoAnalisisRepository")
 */
class ItemTipoAnalisis
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
     * @ORM\Column(name="tipoanalisis_id", type="integer")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoAnalisis")
     */
    private $tipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="ValorReferencia", type="float")
     */
    private $valorReferencia;



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
     * @return ItemTipoAnalisis
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
     * Set valorReferencia
     *
     * @param float $valorReferencia
     * @return ItemTipoAnalisis
     */
    public function setValorReferencia($valorReferencia)
    {
        $this->valorReferencia = $valorReferencia;

        return $this;
    }

    /**
     * Get valorReferencia
     *
     * @return float 
     */
    public function getValorReferencia()
    {
        return $this->valorReferencia;
    }


    /**
     * Set tipoAnalisis
     *
     * @param \AppBundle\Entity\TipoAnalisis $tipoAnalisis
     * @return ItemTipoAnalisis
     */
    public function setTipoAnalisis(\AppBundle\Entity\TipoAnalisis $tipoAnalisis = null)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return \AppBundle\Entity\TipoAnalisis 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }
}