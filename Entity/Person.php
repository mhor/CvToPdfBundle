<?php

namespace Mhor\CvToPdfBundle\Entity;

/**
 * Person
 *
 */
interface Person
{
    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Person
     */
    public function setFirstname($firstname);

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname();

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Person
     */
    public function setLastname($lastname);

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Person
     */
    public function setBirthdate($birthdate);

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate();

    /**
     * Set url
     *
     * @param string $url
     * @return Person
     */
    public function setUrl($url);

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl();

    /**
     * Set phone
     *
     * @param string $phone
     * @return Person
     */
    public function setPhone($phone);

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone();

    /**
     * Set cellphone
     *
     * @param string $cellphone
     * @return Person
     */
    public function setCellphone($cellphone);

    /**
     * Get cellphone
     *
     * @return string
     */
    public function getCellphone();

    /**
     * Set email
     *
     * @param string $email
     * @return Person
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set street
     *
     * @param string $street
     * @return Person
     */
    public function setStreet($street);

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet();

    /**
     * Set city
     *
     * @param string $city
     * @return Person
     */
    public function setCity($city);

    /**
     * Get city
     *
     * @return string
     */
    public function getCity();

    /**
     * Set country
     *
     * @param string $country
     * @return Person
     */
    public function setCountry($country);

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Person
     */
    public function setZipcode($zipcode);

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode();
}
