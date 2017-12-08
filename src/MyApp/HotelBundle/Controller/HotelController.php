<?php

namespace MyApp\HotelBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\HotelBundle\Entity\Hotel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\HotelBundle\Form\HotelType;
use MyApp\HotelBundle\Repository;

class HotelController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }



    public function addHotelAction(Request $request)
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute("esprit_hotel_diplayAll");

        }
        return $this->render("MyAppHotelBundle:Hotel:addHotel.html.twig", array("f" => $form->createView()));
    }



    public function DisplayHotelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em
            ->getRepository("MyAppHotelBundle:Hotel")
            ->findAll();
        $paginator  = $this->get('knp_paginator')->paginate( $hotel,
            $request->query->get('page', 1),5 );
        return $this->render("MyAppHotelBundle:Hotel:affiche.html.twig", array('pagination' => $paginator));

    }

    public function ShowAllHotelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em
            ->getRepository("MyAppHotelBundle:Hotel")
            ->findAll();
        $paginator  = $this->get('knp_paginator')->paginate( $hotel,
            $request->query->get('page', 1),5 );
        return $this->render("MyAppHotelBundle:Hotel:afficheAllHotel.html.twig",array('pagination' => $paginator));

    }

    public  function DeleteHotelAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository("MyAppHotelBundle:Hotel")
            ->find($id);
        $em->remove($hotel);
        $em->flush();


        return $this->redirectToRoute("esprit_hotel_diplayAll");

    }

    public function updateHotelAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository("MyAppHotelBundle:Hotel")
            ->find($id);
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute("esprit_hotel_diplayAll");


        }
        return $this->render("MyAppHotelBundle:Hotel:updateHotel.html.twig", array("f" => $form->createView()));
        //dessiner le formulaire dans view par CreateView

    }



    public function ListAction(Request $request)
    {
        if ($request->isMethod("GET")) {
        $em = $this->getDoctrine()->getManager();
        $keyword = $request->query->get('nom');


        $hotel = $em->getRepository("MyAppHotelBundle:Hotel")
            ->FindBYName($keyword);
            $paginator  = $this->get('knp_paginator')->paginate( $hotel,
                $request->query->get('page', 1),5
            );

        return $this->render("MyAppHotelBundle:Hotel:test.html.twig",array('pagination' => $paginator));
    }
        return $this->render("MyAppHotelBundle:Hotel:rechercheHotel.html.twig", array());

    }





}
