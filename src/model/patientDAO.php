<?php

namespace App\DAO;

use Doctrine\ORM\EntityManagerInterface;
//use App\Entity\Patient;
use Patient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PatientDAO extends ServiceEntityRepository
{
    private $entityManager;

    /*public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }*/

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patient::class);
    }

    /*public function save(Patient $patient)
    {
        $this->entityManager->persist($patient);
        $this->entityManager->flush();
    }*/

    public function save(Patient $patient)
    {
        $this->_em->persist($patient);
        $this->_em->flush();
    }

    public function update(Patient $patient)
    {
        // Rien à faire ici, Doctrine se charge de mettre à jour l'objet en base lors de l'appel à $entityManager->flush()
        $this->entityManager->flush();
    }

    public function delete(Patient $patient)
    {
        $this->entityManager->remove($patient);
        $this->entityManager->flush();
    }

    public function findById($id)
    {
        return $this->entityManager->getRepository(Patient::class)->find($id);
    }

    public function findAll()
    {
        return $this->entityManager->getRepository(Patient::class)->findAll();
    }
}