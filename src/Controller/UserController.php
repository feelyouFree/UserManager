<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 20:18
 */

namespace UserManager\Controller;


use Twig_Environment;
use UserManager\Model\IUserRepository;

class UserController
{

    private $repository;
    private $twig;

    public function __construct(IUserRepository $repository, Twig_Environment $twig)
    {
        $this->repository = $repository;
        $this->twig = $twig;
    }


    public function indexAction()
    {
        $user = $this->repository->show();
        return  $this->twig->render('index.twig',
            array( 'firstname' => $user->getFirstname(),
                   'lastname' => $user->getLastname(),
                   'getStreetAddress' => $user->getAdress()->getStreetAddress(),
                   'city' => $user->getAdress()->getCity(),
                   'state' => $user->getAdress()->getState(),
                   'phonenumbers' => $user->getPhonenumber()->getPhonenumbers()));

    }

}