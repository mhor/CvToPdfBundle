<?php

namespace Mhor\CvToPdfBundle\Model;

/**
 * Skill
 *
 */
class Skill
{
    /**
     * @var string
     *
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
