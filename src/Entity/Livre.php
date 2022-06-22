<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_livre", type="string", length=255, nullable=false)
     */
    private $titreLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="résumé_livre", type="text", length=65535, nullable=false)
     */
    private $résuméLivre;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_livre", type="integer", nullable=false)
     */
    private $prixLivre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateparution_livre", type="date", nullable=false)
     */
    private $dateparutionLivre;

    /**
     * @var int
     *
     * @ORM\Column(name="édition_livre", type="integer", nullable=false)
     */
    private $éditionLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="langue_livre", type="string", length=255, nullable=false)
     */
    private $langueLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="image_livre", type="string", length=255, nullable=false)
     */
    private $imageLivre;

    /**
     * @var int
     *
     * @ORM\Column(name="ISBN_livre", type="integer", nullable=false)
     */
    private $isbnLivre;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_livre", type="integer", nullable=false)
     */
    private $stockLivre;


}
