<?php

namespace Mhor\CvToPdfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lang
 * @ORM\MappedSuperclass
 */
abstract class LangLevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="lang_string", type="string")
     */
    private $libel;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_code", type="int")
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
