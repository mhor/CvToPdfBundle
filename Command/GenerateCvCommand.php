<?php
namespace Mhor\CvToPdfBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCvCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mhor:generate:cv')
            ->setDescription('Generate a cv in pdf format')
            ->addArgument('file', InputArgument::REQUIRED, '[Requiered] File name?')
            ->addArgument('type', InputArgument::REQUIRED, '[Requiered]File type (JSON/XML)')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $output->writeln('<info>Not yet implemented</>');
    }
}