<?php

namespace Mhor\CvToPdfBundle\Model;

/**
 * SkillType
 *
 */
class SkillType
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
