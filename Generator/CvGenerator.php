<?php

namespace Mhor\CvToPdfBundle\Generator;

use Mhor\CvToPdfBundle\Entity\Cv;

class CvGenerator
{
    public function generateCv(Cv $cv)
    {
        return "Service not yet implemented\n";
    }

    /**
     * Transform XML to Cv Object
     *
     * @param File $xmlCv
     * @return \Mhor\CvToPdfBundle\Entity\Cv
     */
    public function transformXmlCvToObject($xmlCv)
    {
        return new Cv();
    }

    /**
     * Transform JSON to Cv Object
     * @param File $xmlJson
     * @return \Mhor\CvToPdfBundle\Entity\Cv
     */
    public function transformJsonCvToObject($xmlJson)
    {
        return new Cv();
    }
}
