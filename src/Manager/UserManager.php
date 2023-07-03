<?php

namespace App\Manager;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserManager{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function saveUser(User $entity, bool $flush = false)
    {
        $this->entityManager->persist($entity);
        if ($flush) {
            $this->entityManager->flush();
        }
    }

    public function deleteUser(User $entity, bool $flush = false)
    {
        $this->entityManager->remove($entity);
        if ($flush) {
            $this->entityManager->flush();
        }
    }

    public function getAllUsers()
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $users = $userRepository->findAll();
        
        return $users;
    }

}