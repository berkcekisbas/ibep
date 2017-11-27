<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sektor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * @Route("/sektor")
 */
class SektorController extends Controller
{
    /**
     * @Route("/add", name="sektor_add")
     */
    public function add(Request $request)
    {
        $sektor = new Sektor();

        $form = $this->createFormBuilder($sektor)
            ->add('ad',TextType::class, array('required' => false,'attr'  => array('class' => 'form-control')))
            ->add('save', SubmitType::class, array('label' => 'Kaydet','attr'  => array('class' => 'btn green')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $sektor = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $em = $this->getDoctrine()->getManager();
             $em->persist($sektor);
             $em->flush();

            return $this->redirectToRoute('sektor_add');
        }



        return $this->render('AppBundle:Sektor:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
