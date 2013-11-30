<?php
namespace Mhor\CvToPdfBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * You must extends ContainerAwareCommand for automatically
 * register a Command on a Symfony app, if you extend Command
 * you must manually register her into  app/console file. 
 *
 */
class GenerateCvCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mhor:generate:cv')
            ->setDescription('Generate a cv in pdf format')
            ->addArgument('file', InputArgument::REQUIRED, '[Requiered] File name?')
            ->addArgument('type', InputArgument::REQUIRED, '[Requiered]File type (JSON/XML)') // optional argument
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $output->writeln('<info>Not yet implemented</>');
    }
}