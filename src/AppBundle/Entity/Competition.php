<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCompetition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetition;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComp", type="string", length=30, nullable=false)
     */
    private $nomcomp;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=30, nullable=false)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateComp", type="date", nullable=false)
     */
    private $datecomp;


}
