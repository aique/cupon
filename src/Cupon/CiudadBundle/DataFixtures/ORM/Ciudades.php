<?php

namespace Cupon\CiudadBundle\DataFixtures\ORM;

use Cupon\CiudadBundle\Entity\Ciudad;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Ciudades extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $ciudades = array
        (
            array("nombre" => "Madrid"),
            array("nombre" => "Barcelona")
        );

        foreach($ciudades as $ciudad)
        {
            $entidad = new Ciudad();

            $entidad->setNombre($ciudad["nombre"]);

            $manager->persist($entidad);
        }

        $manager->flush();
    }

}