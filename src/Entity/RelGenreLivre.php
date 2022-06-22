<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelGenreLivre
 *
 * @ORM\Table(name="rel_genre_livre", indexes={@ORM\Index(name="id_genre", columns={"id_genre", "id_livre"})})
 * @ORM\Entity
 */
class RelGenreLivre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGenre;

    /**
     * @var int
     *
     * @ORM\Column(name="id_livre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLivre;


}
