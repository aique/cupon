<?php

namespace Cupon\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TiendaBundle:Default:contacto.html.twig', array('name' => $name));
    }

    public function portadaAction($ciudad, $tienda)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $ciudad = $em->getRepository('CiudadBundle:Ciudad')->findOneBySlug($ciudad);
        $tienda = $em->getRepository('TiendaBundle:Tienda')->findOneBy(['slug' => $tienda, 'ciudad' => $ciudad]);

        if(!$tienda)
        {
            throw $this->createNotFoundException('No existe esta tienda');
        }

        $ofertas = $em->getRepository('OfertaBundle:Oferta')->findUltimasOfertasPublicadas($tienda->getId());
        $cercanas = $em->getRepository('TiendaBundle:Tienda')->findCercanas($tienda->getSlug(), $tienda->getCiudad()->getSlug());

        return $this->render('@Tienda/Default/portada.html.twig', array
        (
            'tienda' => $tienda,
            'ciudad' => $ciudad,
            'ofertas' => $ofertas,
            'cercanas' => $cercanas
        ));
    }
}
