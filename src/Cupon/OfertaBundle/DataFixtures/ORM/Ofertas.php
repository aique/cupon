<?php

namespace Cupon\OfertaBundle\DataFixtures\ORM;

use Cupon\OfertaBundle\Entity\Oferta;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Ofertas extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $numOfertas = 5;

        for($i = 0 ; $i < $numOfertas ; $i++)
        {
            $oferta = new Oferta();

            $oferta->setNombre("Oferta " . $i);
            $oferta->setDescripcion("Descripción de la oferta " . $i);
            $oferta->setCondiciones("Condiciones de la oferta " . $i);
            $oferta->setFechaPublicacion(new \DateTime(date('Y-m-d H:i:s')));
            $oferta->setFechaExpiracion(new \DateTime(date('Y-m-d H:i:s', strtotime('+1 years'))));

            if($i % 2)
            {
                $oferta->setCiudad($manager->find('CiudadBundle:Ciudad', 1));
            }
            else
            {
                $oferta->setCiudad($manager->find('CiudadBundle:Ciudad', 2));
            }

            $oferta->setTienda($manager->find('TiendaBundle:Tienda', 1));
            $oferta->setRutaFoto(null);
            $oferta->setPrecio(19.99);
            $oferta->setDescuento(0);
            $oferta->setUmbral(100);
            $oferta->setCompras(0);
            $oferta->setRevisada(1);

            $manager->persist($oferta);
        }

        $manager->flush();
    }

}