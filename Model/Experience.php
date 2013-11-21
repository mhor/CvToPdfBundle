<?php

namespace Mhor\CvToPdfBundle\Model;

/**
 * Experience
 *
 */
class Experience
{
    /**
     * @var string
     *
     */
    private $what;

    /**
     * @var string
     *
     */
    private $place;

    /**
     * @var \DateTime
     *
     */
    private $startDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="endDate", type="date")
     */
    private $endDate;

    /**
     * @var string
     *
     */
    private $content;


 
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
