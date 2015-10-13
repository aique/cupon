<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function ofertaAction($ciudad, $slug)
    {
        $em = $this->getDoctrine()->getManager();

        $oferta = $em->getRepository('OfertaBundle:Oferta')->findOferta($ciudad, $slug);

        $relacionadas = $em->getRepository('OfertaBundle:Oferta')->findRelacionadas($ciudad);

        return $this->render('OfertaBundle:Default:detalle.html.twig',
            array
            (
                'oferta' => $oferta,
                'ciudad' => $ciudad,
                'relacionadas' => $relacionadas
            ));
    }
}
