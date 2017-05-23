<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class AdvertController extends Controller
{

  public function indexAction()
  {
    $url = $this->get('router')->generate(
      'oc_platform_home',
      array(),
      UrlGeneratorInterface::ABSOLUTE_URL
    );
    return new Response("L'URL de l'annonce d'id 5 est : $url");
  }

  public function viewAction($id)
  {
    // $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Martin'));
    return new Response('La variable donnée est '.$id);
  }

  public function viewSlugAction($year, $slug, $format)
  {
    // $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Martin'));
    return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
  }
}
