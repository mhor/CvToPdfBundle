<?php

namespace Mhor\CvToPdfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 * @ORM\MappedSuperclass
 */
abstract class Skill
{
    /**
     * @var string
     *
     * @ORM\Column(name="libel", type="string")
     */
    private $libel;

    /**
     * Set libel
     *
     * @param string $libel
     * @return Skill
     */
    public function setLibel($libel)
    {
        $this->libel = $libel;

        return $this;
    }

    /**
     * Get libel
     *
     * @return string
     */
    public function getLibel()
    {
        return $this->libel;
    }
}
