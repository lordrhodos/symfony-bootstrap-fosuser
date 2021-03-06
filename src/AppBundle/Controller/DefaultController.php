<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/service", name="service")
     */
    public function serviceAction()
    {
        return $this->render('default/service.html.twig');
    }

    /**
     * @Route("/product", name="product")
     */
    public function productAction()
    {
        return $this->render('default/product.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/news", name="news")
     */
    public function newsAction()
    {
        return $this->render('default/news.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return $this->render('default/admin.html.twig');
    }

    /**
     * @Route("/secure", name="secure")
     */
    public function secureAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('default/secure.html.twig');
    }


}
