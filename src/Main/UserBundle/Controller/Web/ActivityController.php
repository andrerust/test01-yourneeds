<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class ActivityController extends BaseController
{
   /**
    * @Route("/user/{id}/activities", name="get_pet_activities", requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function getPetActivitiesAction($id = null, UserInterface $user = null, Request $request)
   {

      if (!$this->isAllowedToUse($request)) {
         return $this->getCredentialRedirectUrl($request);
      }
      $collection = $this->getDoctrine()->getRepository('YourneedsUserBundle:Activity')
         ->findAllById($id);

      $list = new ArrayCollection();
      foreach ($collection as $entry) {
         $object = new ArrayCollection();
         //$object->setId($entry['id']);
         $object['mainImage'] = $entry['mainImage'];
         $object['context'] = $entry['context'];
         $object['shortDescription'] = $entry['shortDescription'];
         $object['updatedAt'] = $entry['updatedAt'];
         $object['contextId'] = $entry['contextId'];
         $list[] = $object;
      }

      return $this->render('MainUserBundle:Pet/widgets:activities.tab.widget.html.twig', [
         'activities' => $list
      ]);
   }
}