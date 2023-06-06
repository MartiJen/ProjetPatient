<?php

// src/Controller/PatientController.php

namespace App\Controller;

use App\Entity\patient;
use App\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    /**
     * @Route("/add-patient", name="add_patient")
     */
    public function addPatient(Request $request): Response
    {
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();

            return $this->redirectToRoute('home'); // Redirigez vers la route souhaitée après l'ajout
        }

        return $this->render('patient/addPatient.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}