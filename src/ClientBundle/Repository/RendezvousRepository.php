<?php

namespace ClientBundle\Repository;

/**
 * RendezvousRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RendezvousRepository extends \Doctrine\ORM\EntityRepository
{
    public function rechercheRdvNonEffectuerPasDateJour($date){
        return $this->createQueryBuilder('m')
                    ->where('m.date > ?1')
                    ->setParameter(1,$date)
                    ->getQuery()
                    ->getResult()
            ;
    }

    public function rechercherRdvNonEffectuerDateJour($date,$heure){
        return $this->createQueryBuilder('m')
            ->where('m.date = ?1')
            ->andWhere('m.heure >= ?2 ')
            ->setParameter(1,$date)
            ->setParameter(2,$heure)
            ->getQuery()
            ->getResult()
            ;
    }
}
