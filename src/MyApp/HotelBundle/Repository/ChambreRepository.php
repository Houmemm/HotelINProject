<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 29/11/2016
 * Time: 14:01
 */

namespace MyApp\HotelBundle\Repository;
use Doctrine\ORM\EntityRepository;


class ChambreRepository extends EntityRepository
{
    public function FindByName($keyword)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->Where('u.nbrePlace =:keyword or u.prix =:keyword ');
        $qb->setParameter('keyword', '%'.$keyword.'%');


        return $qb->getQuery()->getResult();
    }


}