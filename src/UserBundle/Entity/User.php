<?php

namespace UserBundle\Entity;

use CommandeBundle\Entity\lignecmd;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Persistence;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\OneToMany(targetEntity="CommandeBundle\Entity\lignecmd", mappedBy="userid")
     */
    private $lignecmds;

    public function __construct()
    {
        parent::__construct();
        $this->lignecmds = new ArrayCollection();

    }


    /**
     * @return Collection|lignecmd[]
     */
    public function getLignecmds(): Collection
    {
        return $this->lignecmds;
    }

    public function addLignecmds(lignecmd $lignecmd): self
    {
        if (!$this->lignecmds->contains($lignecmd)) {
            $this->lignecmds[] = $lignecmd;
            $lignecmd->setUserid($this);
        }

        return $this;
    }

    public function removeLignecmds
    (lignecmd $lignecmd): self
    {
        if ($this->lignecmds->contains($lignecmd)) {
            $this->lignecmds->removeElement($lignecmd);
            // set the owning side to null (unless already changed)
            if ($lignecmd->getUserid() === $this) {
                $lignecmd->setUserid(null);
            }
        }

        return $this;
    }

}

