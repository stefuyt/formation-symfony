<?php
namespace ParkBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DisableCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('park:computer:disable')
            ->setDescription('Disable all computers');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entities = $em->getRepository('ParkBundle:Computer')->findAll();

        foreach ($entities as $entity)
        {
            $entity->setEnabled(false);
        }

        $em->flush();
    }
}