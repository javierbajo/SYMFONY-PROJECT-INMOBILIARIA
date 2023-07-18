<?php

namespace App\Controller;


use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController{
    
    #[Route("/insert/user", name: "insertUser")]
    public function insertUser(
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
            return $this->redirectToRoute('/home');
        }
        return $this->renderForm('registroUser.html.twig', ['userForm' => $form]);
    }

    #[Route("/insert/admin", name: "insertAdmin")]
    public function insertAdmin(
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
            $user->setRoles(["ROLE_ADMIN","ROLE_USER"]);

            $doctrine->persist($user);
            $doctrine->flush();
            return $this->redirectToRoute('/home');
        }
        return $this->renderForm('registroAdmin.html.twig', ['userForm' => $form]);
    }

}
