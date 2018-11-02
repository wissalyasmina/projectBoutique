<?php

namespace projet\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@projetBoutique\Default\index.html.twig');
    }
    public function ChargerShopAction()
    {
        return $this->render('@projetBoutique\Default\Shop.html.twig');
    }
    public function ChargerContactAction()
    {
        return $this->render('@projetBoutique\Default\Contact.html.twig');
    }
    public function ChargerCheckoutAction()
    {
        return $this->render('@projetBoutique\Default\Checkout.html.twig');
    }
    public function ChargerSinglePageAction()
    {
        return $this->render('@projetBoutique\Default\Single-product-details.html.twig');
    }
}

