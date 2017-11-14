<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Yeterlilik;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $yeterlilik = new Yeterlilik();

        $form = $this->createFormBuilder($yeterlilik)
        ->add('ad',TextType::class)
        ->add('save', SubmitType::class, array('label' => 'Kaydet'))
        ->getForm();

        return $this->render('AppBundle::test.html.twig', array(
            'form' => $form->createView(),
        ));


        /*
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */
    }
}
