<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TiendaRepository extends EntityRepository
{
    public function findCercanas($tiendaSlug, $ciudadSlug)
    {
        $em = $this->getEntityManager();

        $dql = 'SELECT t, c
                FROM TiendaBundle:Tienda t
                JOIN t.ciudad c
                WHERE c.slug = :ciudad
                AND t.slug != :tienda';

        $consulta = $em->createQuery($dql);

        $consulta->setMaxResults(5);
        $consulta->setParameter('ciudad', $ciudadSlug);
        $consulta->setParameter('tienda', $tiendaSlug);

        return $consulta->getResult();
    }
}