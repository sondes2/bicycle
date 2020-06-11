<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating", indexes={@ORM\Index(name="IDX_D88926226B3CA4B", columns={"id_user"}), @ORM\Index(name="IDX_D8892622F7384557", columns={"id_produit"})})
 * @ORM\Entity
 */
class Rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=true)
     */
    private $idProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="rat", type="integer", nullable=false)
     */
    private $rat;


}
