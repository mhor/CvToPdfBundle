<?php

namespace Mhor\CvToPdfBundle\Generator;

use Mhor\CvToPdfBundle\Model\Cv;

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
     * @return Cv
     */
    public function transformXmlCvToObject($xmlCv)
    {
        return new Cv();
    }

    /**
     * Transform JSON to Cv Object
     * @param File $xmlJson
     * @return Cv
     */
    public function transformJsonCvToObject($xmlJson)
    {
        return new Cv();
    }
}
