<?php

namespace erpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="erpBundle\Repository\documentRepository")
 */
class document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDocument", type="string", length=255)
     */
    private $nomDocument;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="employe")
     */
    private $idEmploye;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomDocument
     *
     * @param string $nomDocument
     *
     * @return document
     */
    public function setNomDocument($nomDocument)
    {
        $this->nomDocument = $nomDocument;

        return $this;
    }

    /**
     * Get nomDocument
     *
     * @return string
     */
    public function getNomDocument()
    {
        return $this->nomDocument;
    }

   

    /**
     * Set idEmploye
     *
     * @param \erpBundle\Entity\employe $idEmploye
     *
     * @return document
     */
    public function setIdEmploye(\erpBundle\Entity\employe $idEmploye = null)
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }

    /**
     * Get idEmploye
     *
     * @return \erpBundle\Entity\employe
     */
    public function getIdEmploye()
    {
        return $this->idEmploye;
    }
}
