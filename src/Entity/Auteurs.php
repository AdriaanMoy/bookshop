<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteurs
 *
 * @ORM\Table(name="auteurs")
 * @ORM\Entity
 */
class Auteurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auteurs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_auteurs", type="string", length=255, nullable=false)
     */
    private $nomAuteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_auteurs", type="string", length=255, nullable=false)
     */
    private $prenomAuteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_auteurs", type="string", length=255, nullable=false)
     */
    private $paysAuteurs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeces_auteurs", type="date", nullable=false)
     */
    private $datedecesAuteurs;


}
