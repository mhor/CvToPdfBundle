<?php

namespace Mhor\CvToPdfBundle\Entity;

/**
 * Cv
 *
 */
class Cv
{
    /**
     * @var \Mhor\CvToPdfBundle\Entity\Person
     */
    private $person;

    /**
     * @var array
     */
    private $skills;

    /**
     * @var array
     */
    private $experiences;

    /**
     * A markdown formatted text whose explain
     * what is your passions
     *
     * @var string
     */
    private $passions;

    /**
     * Get person
     *
     * @return \Mhor\CvToPdfBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set Person
     *
     * @param \Mhor\CvToPdfBundle\Entity\Person $person
     * @return Cv
     */
    public function setPerson(\Mhor\CvToPdfBundle\Entity\Person $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Get skills
     *
     * @return array
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set Skills
     *
     * @param array $skills
     * @return Cv
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }

    /**
     * Get experiences
     *
     * @return array
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Set Experiences
     *
     * @param array $experiences
     * @return Cv
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;
        return $this;
    }

    /**
     * Get passsions
     *
     * @return string
     */
    public function getPassions()
    {
        return $this->passions;
    }

    /**
     * Set Passions
     *
     * @param string $passions
     * @return Cv
     */
    public function setPassions($passions)
    {
        $this->passions = $passions;
        return $this;
    }
}
