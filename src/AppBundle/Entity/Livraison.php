<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="IDX_A60C9F1FF8646701", columns={"livreur_id"})})
 * @ORM\Entity
 */
class Livraison
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
     * @var int
     *
     * @ORM\Column(name="livreur_id", type="integer", nullable=false)
     */
    private $livreurId;

    /**
     * @var string
     *
     * @ORM\Column(name="livraison_adresse", type="string", length=255, nullable=false)
     */
    private $livraisonAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="livraison_produits", type="string", length=255, nullable=false)
     */
    private $livraisonProduits;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantTotal;


}
