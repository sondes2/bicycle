<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecmd
 *
 * @ORM\Table(name="lignecmd", indexes={@ORM\Index(name="IDX_135E5786F132696E", columns={"userid"}), @ORM\Index(name="IDX_135E5786734413DD", columns={"cmd_id"}), @ORM\Index(name="IDX_135E5786F347EFB", columns={"produit_id"})})
 * @ORM\Entity
 */
class Lignecmd
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
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \Cmd
     *
     * @ORM\ManyToOne(targetEntity="Cmd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_id", referencedColumnName="id")
     * })
     */
    private $cmd;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     * })
     */
    private $produit;


}
