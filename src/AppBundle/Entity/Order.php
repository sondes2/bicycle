<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOrder", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOrder", type="date", nullable=false)
     */
    private $dateorder;

    /**
     * @var int
     *
     * @ORM\Column(name="idCart", type="integer", nullable=false)
     */
    private $idcart;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;


}
