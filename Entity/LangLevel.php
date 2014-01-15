<?php

namespace Mhor\CvToPdfBundle\Entity;


/**
 * Lang
 */
abstract class LangLevel
{
    /**
     * @var string
     *
     */
    private $libel;

    /**
     * @var int
     *
     */
    private $level;

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

    /**
     * Set Level
     *
     * @param string $level
     * @return LevelLang
     */
    public function setCode($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
}
