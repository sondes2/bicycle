<?php

namespace AppBundle\Repository;


/**
 * NotificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NotificationRepository extends \Doctrine\ORM\EntityRepository
{
    public function filterrr($id)
    {
        $query = $this->getEntityManager()->createQuery("select x from AppBundle:Notification x JOIN x.livreur u WHERE (u.id= :id) ")
            ->setParameter('id', $id);
        return $query->getScalarResult();
    }
}