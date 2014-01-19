<?php

namespace Mhor\CvToPdfBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 * @ORM\MappedSuperclass
 */
class Skill
{
    /**
     * @var string
     *
     * @ORM\Column(name="libel", type="string")
     */
    protected $libel;

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
