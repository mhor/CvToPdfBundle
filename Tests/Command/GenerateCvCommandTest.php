<?php
namespace Mhor\CvToPdfBundle\Tests\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Mhor\CvToPdfBundle\Command\GenerateCvCommand;

/**
 * PHPUnit class must ended by "Test" string
 */
class GenerateCvCommandTest extends \PHPUnit_Framework_TestCase
{

    /**
     * A test function must start by string "test"
     *  
     */
    public function testExecute()
    {
    
        $application = new Application();
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
        $this->assertEquals("Not yet implemented", $commandTester->getDisplay());
    }
}