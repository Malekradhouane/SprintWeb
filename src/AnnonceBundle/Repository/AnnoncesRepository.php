<?php

/**
 * Created by PhpStorm.
 * User: Yousfi Oussama
 * Date: 20/11/2017
 * Time: 03:03
 */
namespace AnnonceBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AnnoncesRepository extends EntityRepository
{
    public function findAnnoncesByDestianation($location,$categorie,$number1, $number2,$type){
       $query= $this->getEntityManager()->createQuery("SELECT m from KarhabtyBundle:Annonces m WHERE m.ville=:ville AND m.categorie=:categorie
 AND m.prix > :number1 AND m.prix < :number2 AND m.type=:type ")
           ->setParameter('ville',$location)->setParameter('categorie',$categorie)->setParameter('number1',$number1)
           ->setParameter('number2',$number2)
           ->setParameter('type',$type);
       return $query->getResult();
    }
    public function findAnnonceByIdUser($id)
    {
        $query = $this->getEntityManager()->createQuery("SELECT m from KarhabtyBundle:Annonces m WHERE m.idUser =:id ")
            ->setParameter('id',$id);
        return $query->getResult();
    }
    public function findQb()
    {
        $qb = $this->getEntityManager()->createQuery("select m from KarhabtyBundle:Annonces m WHERE m.connectivite=:conn")
            ->setParameter('conn',0);
        return $qb->getResult();
    }
}
