<?php
namespace Mhor\CvToPdfBundle\Tests\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Mhor\CvToPdfBundle\Command\GenerateCvCommand;

class GenerateCvCommandTest extends WebTestCase
{
    
    /**
     * Gets Kernel mock instance
     *
     * @return Symfony\Component\HttpKernel\Kernel
     */
    private function getMockKernel()
    {
        return $this->getMock('Symfony\Component\HttpKernel\Kernel', array(), array(), '', false, false);
    }

    public function testExecute()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();

        
        $application = new Application(static::$kernel);
        $application->add(new GenerateCvCommand());
        
        $command = $application->find('mhor:generate:cv');
        
       
        
        $commandTester = new CommandTester($command);
        $commandTester->execute(
            array(
                'file' => 'mhor.json',
                'type' => 'json',
            ),
            array(
                'interactive' => false
            )
        );
        
        $this->assertEquals("Service not yet implemented\n\nNot yet implemented\n", 
            $commandTester->getDisplay()
        );
    }
}
