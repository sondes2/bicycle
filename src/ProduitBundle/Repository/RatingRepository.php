<?php

namespace ProduitBundle\Repository;

/**
 * RatingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RatingRepository extends \Doctrine\ORM\EntityRepository
{



    public function findRatings(){

        return $this->getEntityManager()->createQuery(
            "SELECT r FROM ProduitBundle:Rating r  ")->getResult();
    }



}
