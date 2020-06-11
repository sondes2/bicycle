<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workshop
 *
 * @ORM\Table(name="workshop", indexes={@ORM\Index(name="idTrainer", columns={"idTrainer"})})
 * @ORM\Entity
 */
class Workshop
{
    /**
     * @var string
     *
     * @ORM\Column(name="NameW", type="string", length=20, nullable=false)
     */
    private $namew;

    /**
     * @var int
     *
     * @ORM\Column(name="idW", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idw;

    /**
     * @var string
     *
     * @ORM\Column(name="DateW", type="string", length=20, nullable=false)
     */
    private $datew;

    /**
     * @var string
     *
     * @ORM\Column(name="Duration", type="string", length=20, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressW", type="string", length=40, nullable=false)
     */
    private $addressw;

    /**
     * @var int
     *
     * @ORM\Column(name="idTrainer", type="integer", nullable=false)
     */
    private $idtrainer;


}
