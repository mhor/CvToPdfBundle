<?php

namespace Mhor\CvToPdfBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 * @ORM\MappedSuperclass
 */
class Experience
{
    /**
     * @var string
     * @ORM\Column(name="what", type="string")
     */
    protected $what;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string")
     */
    protected $place;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date")
     */
    protected $startDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="end_date", type="date")
     */
    protected $endDate;

    /**
     * @var string
     * @ORM\Column(name="content", type="string")
     */
    protected $content;

    /**
     * Set what
     *
     * @param string $what
     * @return Experience
     */
    public function setWhat($what)
    {
        $this->what = $what;

        return $this;
    }

    /**
     * Get what
     *
     * @return string
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Experience
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Experience
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Experience
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Experience
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
