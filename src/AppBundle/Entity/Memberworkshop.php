<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memberworkshop
 *
 * @ORM\Table(name="memberworkshop", indexes={@ORM\Index(name="fk_idWor", columns={"idW"}), @ORM\Index(name="fffk_idUse", columns={"idUser"})})
 * @ORM\Entity
 */
class Memberworkshop
{
    /**
     * @var int
     *
     * @ORM\Column(name="idM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idm;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Workshop
     *
     * @ORM\ManyToOne(targetEntity="Workshop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idW", referencedColumnName="idW")
     * })
     */
    private $idw;


}
