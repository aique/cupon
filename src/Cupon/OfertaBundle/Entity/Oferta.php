<?php

namespace Cupon\OfertaBundle\Entity;

use Cupon\SitioBundle\Util\Util;
use Doctrine\ORM\Mapping as ORM;

// Se indica que dispone de repositorio propio

/**
 * @ORM\Entity(repositoryClass="Cupon\OfertaBundle\Entity\OfertaRepository")
 * @ORM\Table(name="sf_oferta")
 */
class Oferta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text")
     */
    private $condiciones;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ruta_foto;

    /**
     * @ORM\Column(type="decimal")
     */
    private $precio;

    /**
     * @ORM\Column(type="decimal")
     */
    private $descuento;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_publicacion;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_expiracion;

    /**
     * @ORM\Column(type="integer")
     */
    private $compras;

    /**
     * @ORM\Column(type="integer")
     */
    private $umbral;

    /**
     * @ORM\Column(type="boolean")
     */
    private $revisada;

    /**
     * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad", cascade={"persist"})
     */
    private $ciudad;

    /**
     * @ORM\ManyToOne(targetEntity="Cupon\TiendaBundle\Entity\Tienda", cascade={"persist"})
     */
    private $tienda;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * @param mixed $condiciones
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;
    }

    /**
     * @return mixed
     */
    public function getRutaFoto()
    {
        return $this->ruta_foto;
    }

    /**
     * @param mixed $ruta_foto
     */
    public function setRutaFoto($ruta_foto)
    {
        $this->ruta_foto = $ruta_foto;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * @param mixed $descuento
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    /**
     * @return mixed
     */
    public function getFechaPublicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * @param mixed $fecha_publicacion
     */
    public function setFechaPublicacion($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    /**
     * @return mixed
     */
    public function getFechaExpiracion()
    {
        return $this->fecha_expiracion;
    }

    /**
     * @param mixed $fecha_expiracion
     */
    public function setFechaExpiracion($fecha_expiracion)
    {
        $this->fecha_expiracion = $fecha_expiracion;
    }

    /**
     * @return mixed
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * @param mixed $compras
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;
    }

    /**
     * @return mixed
     */
    public function getUmbral()
    {
        return $this->umbral;
    }

    /**
     * @param mixed $umbral
     */
    public function setUmbral($umbral)
    {
        $this->umbral = $umbral;
    }

    /**
     * @return mixed
     */
    public function getRevisada()
    {
        return $this->revisada;
    }

    /**
     * @param mixed $revisada
     */
    public function setRevisada($revisada)
    {
        $this->revisada = $revisada;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return mixed
     */
    public function getTienda()
    {
        return $this->tienda;
    }

    /**
     * @param mixed $tienda
     */
    public function setTienda($tienda)
    {
        $this->tienda = $tienda;
    }

    function __toString()
    {
        return $this->nombre;
    }
}