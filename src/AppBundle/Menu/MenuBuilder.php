<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class MenuBuilder
{

    /** @var FactoryInterface */
    private $factory;

    /** @var ContainerInterface */
    private $container;

    /** @var  AuthorizationChecker */
    private $authorizationChecker;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory, ContainerInterface $container)
    {
        $this->factory = $factory;
        $this->container = $container;
        $this->authorizationChecker = $this->container->get('security.authorization_checker');
    }

    /**
     * create the main menu
     *
     * @param RequestStack $requestStack
     *
     * @return \Knp\Menu\ItemInterface
     */
    public function createMainMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Homepage', array('route' => 'homepage'));
        $menu->addChild('News', array('route' => 'news'));
        $menu->addChild('About us', array('route' => 'about'));
        $menu->addChild('Product', array('route' => 'product'));
        $menu->addChild('Service', array('route' => 'service'));
        $menu->addChild('Contact', array('route' => 'contact'));

        // add some secured items
        if ($this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
            $menu->addChild('Secured item', array('route' => 'secure'));
        }
        return $menu;
    }

    public function createMetaMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root');

        if ($this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
            $menu->addChild('Profile', array('route' => 'fos_user_security_logout'))
                ->setAttribute('icon', 'fa fa-user');
            $menu->addChild('Logout', array('route' => 'fos_user_security_logout'))
                ->setAttribute('icon', 'fa fa-unlock-alt');
        } else {

            $menu->addChild('Login', array('route' => 'fos_user_security_login'))
                ->setAttribute('icon', 'fa fa-lock');
            $menu->addChild('Registrieren', array('route' => 'fos_user_registration_register'))
                ->setAttribute('icon', 'fa fa-pencil-square-o');
        }

        return $menu;
    }
}