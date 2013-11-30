<?php
namespace Mhor\CvToPdfBundle\Tests\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Mhor\CvToPdfBundle\Command\GenerateCvCommand;

/**
 * PHPUnit class must ended by "Test" string
 */
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

    /**
     * A test function must start by string "test"
     *  
     */
    public function testExecute()
    {
        $kernel = $this->getMockKernel();
        $kernel->boot();
    
        $application = new Application($kernel);
        $application->add(new GenerateCvCommand());

        $command = $application->find('mhor:generate:cv');
        $commandTester = new CommandTester($command);
        $commandTester->execute(
            array(
                'file' => '',
                'type' => 'json',
            ),
            array(
                'interactive' => false
            )
        );
       
        $this->assertEquals("Not yet implemented\n", $commandTester->getDisplay());
    }
}