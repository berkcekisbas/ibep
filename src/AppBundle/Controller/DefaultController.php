<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Yeterlilik;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $yeterlilik = new Yeterlilik();

        $form = $this->createFormBuilder($yeterlilik)
            ->add('ad',TextType::class, array('attr'  => array('class' => 'form-control')))
            ->add('kod',TextType::class, array('attr'  => array('class' => 'form-control')))
            ->add('sektor', EntityType::class, array(
                'attr'  => array('class' => 'form-control'),
            'placeholder' => 'Sektör Seçiniz',
            'required' => true,
            'class' => 'AppBundle:Sektor',
             // use the User.username property as the visible option string
             'choice_label' => 'ad',
             // used to render a select box, check boxes or radios
             // 'multiple' => true,
             // 'expanded' => true,
         ))
            ->add('save', SubmitType::class, array('label' => 'Kaydet','attr'  => array('class' => 'btn green')))
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
