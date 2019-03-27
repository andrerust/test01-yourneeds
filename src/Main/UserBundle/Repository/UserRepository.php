<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\User;

class UserRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, User::class);
   }

   public function getUser($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:User', 'u');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('gender', 'gender');
      $rsm->addScalarResult('user_title_id', 'userTitleId');
      $rsm->addScalarResult('family_status_id', 'familyStatusId');
      $rsm->addScalarResult('job_group_id', 'jobGroupId');
      $rsm->addScalarResult('first_name', 'firstName');
      $rsm->addScalarResult('birthdate', 'birthdate');
      $rsm->addScalarResult('last_name', 'lastName');
      $rsm->addScalarResult('profile_picture', 'profilePicture');
      $rsm->addScalarResult('phone_number', 'phoneNumber');
      $rsm->addScalarResult('job', 'job');
      $rsm->addScalarResult('email', 'email');
      $rsm->addScalarResult('note', 'note');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('is_blocked', 'isBlocked');
      $rsm->addScalarResult('updated_at', 'updatedAt');
      $rsm->addScalarResult('created_at', 'createdAt');

      $sql = "
        SELECT
          u.id AS id,
          u.gender,
          u.first_name,
          u.profile_picture,
          u.last_name,
          u.birthdate,
          u.phone_number,
          u.email,
          u.family_status_id,
          u.job_group_id,
          u.user_title_id,
          u.note,
          u.is_active,
          u.is_blocked,
          u.updated_at,
          u.created_at
        FROM
          user u
        WHERE
          u.id = $id
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

   public function getAllUsers()
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:User', 'u');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('first_name', 'firstName');
      $rsm->addScalarResult('last_name', 'lastName');
      $rsm->addScalarResult('profile_picture', 'profilePicture');
      $rsm->addScalarResult('email', 'email');
      $rsm->addScalarResult('phone_number', 'phoneNumber');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('is_blocked', 'isBlocked');
      $rsm->addScalarResult('updated_at', 'updatedAt');
      $rsm->addScalarResult('update_year', 'updateYear');
      $rsm->addScalarResult('update_month', 'updateMonth');

      $sql = '
        SELECT
          u.id AS id,
          u.first_name,
          u.last_name,
          u.profile_picture,
          u.email,
          u.phone_number,
          u.is_active,
          u.is_blocked,
          u.updated_at
        FROM
          user u
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result); die;
      return $result;
   }

   public function findAllActive()
   {
      return $this->createQueryBuilder('user')
         ->getQuery()
         ->execute();
   }

   public function findUserByEmail($email = null)
   {
      return $this->createQueryBuilder('u')
         ->where('u . email = :email')
         ->setParameter('email', $email)
         ->getQuery()
         ->getOneOrNullResult();
   }

   public function getUserByEmail($email = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:User', 'u');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('first_name', 'firstName');
      $rsm->addScalarResult('last_name', 'lastName');
      $rsm->addScalarResult('email', 'email');

      $sql = '
        SELECT
          u.id,
          u.first_name,
          u.last_name,
          u.email
        FROM
          user u
        WHERE
          u.email = "' . $email . '"
        LIMIT 1
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getSingleScalarResult();
      //print_r($result);die;
      return $result;
   }

   public function findSecurityUserByEmail($email = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:User', 'u');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('first_name', 'firstName');
      $rsm->addScalarResult('last_name', 'lastName');
      $rsm->addScalarResult('email', 'email');

      $sql = '
        SELECT
          u.id,
          u.first_name,
          u.last_name,
          u.email
        FROM
          user u
        WHERE
          u.email = "' . $email . '"
        LIMIT 1
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);die;
      return $result;
   }
}
