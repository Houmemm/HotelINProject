<?php

namespace MyApp\HotelBundle\Controller;

use MyApp\HotelBundle\Entity\Chambre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\HotelBundle\Form\ChambreType;
use MyApp\HotelBundle\Repository\ChambreRepository;

class chambreController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }




    public function addChambreAction(Request $request)
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chambre);
            $em->flush();
            return $this->redirectToRoute("ShowAll_chambre");

        }
        return $this->render("MyAppHotelBundle:Chambre:addChambre.html.twig", array("f" => $form->createView()));
    }



    public function DisplayChambreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em
            ->getRepository("MyAppHotelBundle:Chambre")
            ->findAll();
        return $this->render("MyAppHotelBundle:Chambre:afficheChambre.html.twig", array("ms" => $chambre));

    }

    public function DisplayAllChambreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em
            ->getRepository("MyAppHotelBundle:Chambre")
            ->findAll();
        return $this->render("MyAppHotelBundle:Chambre:afficheAllChambre.html.twig", array("ms" => $chambre));

    }

    public  function DeleteChambreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository("MyAppHotelBundle:Chambre")
            ->find($id);
        $em->remove($hotel);
        $em->flush();


        return $this->redirectToRoute("ShowAll_chambre");

    }

    public function updateChambreAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em->getRepository("MyAppHotelBundle:Chambre")
            ->find($id);
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($chambre);
            $em->flush();
            return $this->redirectToRoute("ShowAll_chambre");


        }
        return $this->render("MyAppHotelBundle:Chambre:updateChambre.html.twig", array("f" => $form->createView()));
        //dessiner le formulaire dans view par CreateView

    }


    public function rechercheChambreAction(Request $request)
    {

        if ($request->isMethod("post")) {
            $nom = $request->get('nom');


            $em = $this->getDoctrine()->getManager();
            $hotel = $em
                ->getRepository("MyAppHotelBundle:Hotel")
                ->findBy(array("nom"=>$nom));
            return $this->render("MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig", array("ms" => $hotel));
        }
        return $this->render("MyAppHotelBundle:Hotel:rechercheHotel.html.twig", array());

        // recherche selon nbre de place
        // recherche selon le nom de l'hotel

    }

}
