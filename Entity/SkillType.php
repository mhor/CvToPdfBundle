<?php

namespace Mhor\CvToPdfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillType
 * @ORM\MappedSuperclass
 */
class SkillType
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
     * @return SkillType
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
