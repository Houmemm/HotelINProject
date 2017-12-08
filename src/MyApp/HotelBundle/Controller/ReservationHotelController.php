<?php

namespace MyApp\HotelBundle\Controller;

use MyApp\HotelBundle\Entity\ReservationHotel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\HotelBundle\Form\ReservationHotelType;
use MyApp\HotelBundle\Entity\Chambre;
use MyApp\HotelBundle\Repository\ChambreRepository;

class ReservationHotelController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function addResvHotelAction(Request $request)
    {
        $resChambre = new ReservationHotel();

        $form = $this->createForm(ReservationHotelType::class, $resChambre);
        $form->handleRequest($request);



        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted())
        {


            $idChambre = $form->get('idChambre')->getData();

            $chambre =$em->getRepository("MyAppHotelBundle:Chambre")->findOneBy(array('idChambre'=>$idChambre ));

            $resChambre->setIdChambre($chambre);
            $chambre->setDisponible('0');
            $em->persist($resChambre);
            $em->persist($chambre);
            $em->flush();
            return $this->redirectToRoute("ShowAll_reservationHotel");

        }
        return $this->render("MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig", array("f" => $form->createView()));
    }



    public function showResvHotelAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $resChambre = $em
            ->getRepository("MyAppHotelBundle:ReservationHotel")
            ->findAll();
        return $this->render("MyAppHotelBundle:ReservationHotel:afficheReservationHotel.html.twig", array("ms" => $resChambre));

    }

    public function ShowAllResvHotelAction()
    {
        $em = $this->getDoctrine()->getManager();
        $resChambre = $em
            ->getRepository("MyAppHotelBundle:ReservationHotel")
            ->findAll();
        return $this->render("MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig", array("ms" => $resChambre));

    }

    public  function DeleteReservationHotelAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $resChambre = $em->getRepository("MyAppHotelBundle:ReservationHotel")
            ->find($id);
        $em->remove($resChambre);
        $em->flush();


        return $this->redirectToRoute("ShowAll_reservationHotel");

    }

    public function updateResvHotelAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $resChambre = $em->getRepository("MyAppHotelBundle:ReservationHotel")
            ->find($id);
        $form = $this->createForm(ReservationHotelType::class, $resChambre);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($resChambre);
            $em->flush();
            return $this->redirectToRoute("ShowAll_reservationHotel");


        }
        return $this->render("MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig", array("f" => $form->createView()));
        //dessiner le formulaire dans view par CreateView

    }


    public function rechercheReservationHotelAction(Request $request)
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


        // recherche selon le nom de l'hotel pour front office
        // recherche selon le nom de l'hotel et nom client pour back office

    }
}
