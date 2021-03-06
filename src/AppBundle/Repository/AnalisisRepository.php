<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AnalisisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnalisisRepository extends EntityRepository
{
    public function getAnalisisPaciente($idPaciente, $idItem)
    {



        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder();


        $query->select('ra.resultado')
            ->addSelect('a.fechaEntrega')
            ->from('AppBundle:ResultadoAnalisis', 'ra')
            ->leftJoin('ra.analisis','a')
            ->leftJoin('ra.item','it')
            ->where('it.id = :idItem')
            ->andWhere('a.paciente = :idPaciente')
            ->orderBy('a.fechaEntrega')
            ->setParameter('idPaciente',$idPaciente)
            ->setParameter('idItem',$idItem)
            ->getQuery();

       return ($query->getQuery()->getResult());

    }
}

