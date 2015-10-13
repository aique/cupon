<?php

namespace Cupon\TiendaBundle\DataFixtures\ORM;

use Cupon\TiendaBundle\Entity\Tienda;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Tiendas extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $numTiendas = 5;

        for($i = 0 ; $i < $numTiendas ; $i++)
        {
            $tienda = new Tienda();

            $tienda->setNombre("Tienda " . $i);
            $tienda->setCiudad($manager->find('CiudadBundle:Ciudad', 1));
            $tienda->setDireccion("C/Cualquiera nº " . $i);
            $tienda->setDescripcion("Todo lo que necesites encontrar");
            $tienda->setLogin("login" . $i);
            $tienda->setPassword("pass" . $i);
            $tienda->setSalt(uniqid(mt_rand(), true));

            $manager->persist($tienda);
        }

        $manager->flush();
    }

}