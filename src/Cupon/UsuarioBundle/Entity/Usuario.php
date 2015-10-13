<?php

namespace Cupon\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sf_usuario")
 */
class Usuario
{
    public function __construct()
    {
        $this->fecha_alta = new \DateTime(date('Y-m-d H:i:s'));
    }

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
     * @ORM\Column(type="string", length=255)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salt;

    /**
     * @ORM\Column(type="text")
     */
    private $direccion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $permite_email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_alta;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_nacimiento;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $dni;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $numero_tarjeta;

    /**
     * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")
     */
    private $ciudad;

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
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getPermiteEmail()
    {
        return $this->permite_email;
    }

    /**
     * @param mixed $permite_email
     */
    public function setPermiteEmail($permite_email)
    {
        $this->permite_email = $permite_email;
    }

    /**
     * @return mixed
     */
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }

    /**
     * @param mixed $fecha_alta
     */
    public function setFechaAlta($fecha_alta)
    {
        $this->fecha_alta = $fecha_alta;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * @param mixed $fecha_nacimiento
     */
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getNumeroTarjeta()
    {
        return $this->numero_tarjeta;
    }

    /**
     * @param mixed $numero_tarjeta
     */
    public function setNumeroTarjeta($numero_tarjeta)
    {
        $this->numero_tarjeta = $numero_tarjeta;
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

    function __toString()
    {
        return $this->nombre . ' ' . $this->apellidos;
    }
}