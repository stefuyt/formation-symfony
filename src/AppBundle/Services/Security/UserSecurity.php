<?php

namespace AppBundle\Services\Security;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\User;

class UserSecurity
{
    /**
     * @var EncoderFactoryInterface
     */
    protected $encoderFactory;

    /**
     * Constructor
     *
     * @param EncoderFactoryInterface $encoderFactory
     */
    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    protected function getEncoder(UserInterface $user)
    {
        return $this->encoderFactory->getEncoder($user);
    }

    protected function updatePassword(UserInterface $user)
    {
        if (0 !== strlen($password = $user->getPlainPassword())) {
            $encoder = $this->getEncoder($user);
            $user->setSalt(User::SALT);
            $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
            $user->eraseCredentials();
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof UserInterface) {
            $this->updatePassword($object);
        }
    }
}