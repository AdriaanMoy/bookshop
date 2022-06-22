<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelAutLivre
 *
 * @ORM\Table(name="rel_aut_livre", indexes={@ORM\Index(name="id_auteurs", columns={"id_auteurs", "id_livre"})})
 * @ORM\Entity
 */
class RelAutLivre
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
     * @var int
     *
     * @ORM\Column(name="id_livre", type="integer", nullable=false)
     */
    private $idLivre;


}
