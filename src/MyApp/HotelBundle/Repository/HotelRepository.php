<?php
namespace MyApp\HotelBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MyApp\HotelBundle\Entity\Hotel;

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 29/11/2016
 * Time: 02:12
 */
class HotelRepository extends EntityRepository
{
    public function FindByName($keyword)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->Where('u.nom like :keyword or u.ville like :keyword ');
        $qb->setParameter('keyword', '%'.$keyword.'%');


        return $qb->getQuery()->getResult();
    }


    /*
    public function findLibDql()
    {
        $em=$this->getEntityManager();
        $query=$em->createQuery("select m from EspritParcBundle:Modele m WHERE m.libelle='kia2'");
        return $query->getResult();
    }*/
}