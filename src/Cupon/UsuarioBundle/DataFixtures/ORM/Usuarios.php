<?php

namespace Cupon\UsuarioBundle\DataFixtures\ORM;

use Cupon\UsuarioBundle\Entity\Usuario;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Usuarios extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 4;
    }


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $numUsuarios = 5;

        for($i = 0 ; $i < $numUsuarios ; $i++)
        {
            $usuario = new Usuario();

            $usuario->setNombre("Usuario" . $i);
            $usuario->setApellidos("Apellidos " . $i);
            $usuario->setCiudad($manager->find('CiudadBundle:Ciudad', 1));
            $usuario->setDireccion("Dirección del usuario " . $i);
            $usuario->setDni("123123" . $i);
            $usuario->setEmail("usuario" . $i . "@mail.com");
            $usuario->setFechaNacimiento(new \DateTime(date('Y-m-d')));
            $usuario->setNumeroTarjeta($i);
            $usuario->setPassword("pass" . $i);
            $usuario->setPermiteEmail(true);
            $usuario->setSalt(uniqid(mt_rand(), true));

            $manager->persist($usuario);
        }

        $manager->flush();
    }

}