<?php

namespace Cupon\SitioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function portadaAction($ciudad)
    {
        $em = $this->getDoctrine()->getManager();

        $ofertaDelDia = $em->getRepository('OfertaBundle:Oferta')->findOfertaDelDia($ciudad);

        return $this->render('SitioBundle:Default:portada.html.twig', array('oferta' => $ofertaDelDia, 'ciudad' => $ciudad));
    }

    public function estaticaAction($pagina)
    {
        return $this->render('SitioBundle:Default:'.$pagina.'.html.twig');
    }
}
