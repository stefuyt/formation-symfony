<?php

namespace AppBundle\Twig;

use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

/**
 * Class ComputerStatusExtension
 * @package AppBundle\Twig
 */
class HasRightExtension extends \Twig_Extension
{

    /**
     * @var AuthorizationChecker
     */
    private $authChecker;

    /**
     * @param AuthorizationChecker $authChecker
     */
    public function __construct(AuthorizationChecker $authChecker)
    {
        $this->authChecker = $authChecker;
    }

    public function aLeDroit($role)
    {
        return $this->authChecker->isGranted($role);
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'has_right',
                array($this, 'aLeDroit'),
                array(
                    'is_safe' => array('html')
                )
            ),
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_has_right';
    }
}
