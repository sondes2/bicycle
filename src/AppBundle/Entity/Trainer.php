<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer")
 * @ORM\Entity
 */
class Trainer
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTrainer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtrainer;

    /**
     * @var string
     *
     * @ORM\Column(name="NameT", type="string", length=20, nullable=false)
     */
    private $namet;

    /**
     * @var string
     *
     * @ORM\Column(name="CinT", type="string", length=8, nullable=false)
     */
    private $cint;

    /**
     * @var string
     *
     * @ORM\Column(name="Speciality", type="string", length=20, nullable=false)
     */
    private $speciality;


}
