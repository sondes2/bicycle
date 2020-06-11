<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_EB7A4E6DC05FB297", columns={"confirmation_token"}), @ORM\UniqueConstraint(name="UNIQ_EB7A4E6D92FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_EB7A4E6DA0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity
 */
class Livreur
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=180, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=180, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_token", type="string", length=180, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", length=0, nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="liv_nom", type="string", length=255, nullable=false)
     */
    private $livNom;

    /**
     * @var string
     *
     * @ORM\Column(name="liv_prenom", type="string", length=255, nullable=false)
     */
    private $livPrenom;

    /**
     * @var int
     *
     * @ORM\Column(name="liv_tel", type="integer", nullable=false)
     */
    private $livTel;

    /**
     * @var bool
     *
     * @ORM\Column(name="liv_dispo", type="boolean", nullable=false)
     */
    private $livDispo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrlivraison_parjour", type="integer", nullable=false)
     */
    private $nbrlivraisonParjour;


}
