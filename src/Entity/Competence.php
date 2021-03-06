<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceRepository")
 */
class Competence {


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_competence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Capacite")
     */
    private $capacite;


    

  
    

    /**
     * Get the value of code_competence
     */ 
    public function getcode_competence()
    {
        return $this->code_competence;
    }

    /**
     * Get the value of code_competence
     */ 
    public function getcodeCompetence()
    {
        return $this->code_competence;
    }

    /**
     * Set the value of code_competence
     *
     * @return  self
     */ 
    public function setcode_competence($code_competence)
    {
        $this->code_competence = $code_competence;

        return $this;
    }

    /**
     * Set the value of code_competence
     *
     * @return  self
     */ 
    public function setcodeCompetence($code_competence)
    {
        $this->code_competence = $code_competence;

        return $this;
    }

    /**
     * Get the value of intitule
     */ 
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set the value of intitule
     *
     * @return  self
     */ 
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get the value of capacite
     */ 
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     *
     * @return  self
     */ 
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}