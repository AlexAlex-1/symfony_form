<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;

class Index extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(User $user): Response
    {
        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('description', TextareaType::class)
            ->getForm();

        return $this->render('index.html.twig', [
            'form' => $form,
        ]);
    }
}
