<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\tp_noteRepository")
 */
class tp_note {


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eleve")
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tp")
     */
    private $tp;
 
    /** 
     * @ORM\Column(type="decimal",precision=2)
    */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Professeur",fetch="EAGER")
     */
    private $professeur;
    
    /** 
     * @ORM\Column(type="string")
    */
    private $etat;

    /** 
     * @ORM\Column(type="date")
    */
    private $date;

    /**
     * Get the value of eleve
     */ 
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set the value of eleve
     *
     * @return  self
     */ 
    public function setEleve($eleve)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get the value of tp
     */ 
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set the value of tp
     *
     * @return  self
     */ 
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of professeur
     */ 
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * Set the value of professeur
     *
     * @return  self
     */ 
    public function setProfesseur($professeur)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}