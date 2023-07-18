<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController{


    #[Route("/login")]

    public function login(
        EntityManagerInterface $doctrine,
        Request $request,
        UserPasswordHasherInterface $cifrado
    )
    {
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $user = $form->getData();
            $password = $user->getPassword();
            $passwordCifrada = $cifrado->hashPassword($user, $password);
            $user->setPassword($passwordCifrada);

            $doctrine->persist($user);
            $doctrine->flush();
            return $this->redirectToRoute('/');
        }
        return $this->renderForm('login.html.twig', ['userForm' => $form]);
    }

}