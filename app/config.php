<?php

use UserManager\Model\IUserRepository;
use UserManager\Repository\InMemoryUserRepository;

use function DI\object;

return [
    IUserRepository::class => DI\object(InMemoryUserRepository::class),
    Twig_Environment::class => function () {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/Views');
        return new Twig_Environment($loader);
    },
];
