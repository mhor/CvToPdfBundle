<?php

namespace Mhor\CvToPdfBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class Website
{
    /**
     * @var string
     * @ORM\Column(name="url", type="string")
     */
    protected $url;

    /**
     * @var string
     * @ORM\Column(name="title", type="string")
     */
    protected $title;

    /**
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param string $url
     * @return Website
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *
     * @param string $title
     * @return Website
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}

