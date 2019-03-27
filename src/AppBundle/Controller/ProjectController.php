<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Custom\Project\EditProjectRequest;
use AppBundle\Form\Project\EditProjectFormType;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use AppBundle\Repository\ProjectRepository;
use Main\UserBundle\Entity\UserProject;
use Main\UserBundle\Repository\UserProjectRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ProjectController extends BaseController
{

    /**
     * @Route("manager/projects", name="manager_projects")
     */
    public function projectsAction(Request $request,
                                   AuthorizationCheckerInterface $authorizationChecker,
                                   UserRepository $userRepository,
                                   ProjectRepository $projectRepository,
                                   UserProjectRepository $userProjectRepository,
                                   DocumentRepository $documentRepository,
                                   DocumentTypeRepository $documentTypeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_SAVE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $projects = $projectRepository->findAll();
        $formRequest = new EditProjectRequest();
        $form = $this->createForm(EditProjectFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);

                if ($this->hasErrors == true) {
                }
            } else {

                $em = $this->getDoctrine()->getManager();
                $tmpUserProjectId = $userProjectRepository->getUserProjectId($this->user->getId());
                //print_r($tmpUserProjectId);
                if ($tmpUserProjectId != null) {
                    $tmpUserProject = $userProjectRepository->find($tmpUserProjectId['id']);
                    $em->remove($tmpUserProject);
                    $em->flush();
                }

                //if ($form->isValid()) {
                $project = new UserProject();
                $projectId = $formRequest->getProject();
                $tmpProject = $projectRepository->find($projectId);
                $project->setProject($tmpProject);
                $project->setUser($this->user);

                $em->persist($project);
                $em->flush();

                return $this->redirectToRoute('manager_projects');
                //}
            }
        }

        $tmpUserProjectId = $userProjectRepository->getUserProjectId($this->user->getId());

        return $this->render('@AppBundle/project/project.edit.html.twig', [
            'user' => $this->user,
            'projects' => $projects,
            'activeUserProjectId' => $tmpUserProjectId['projectId'],
            'form' => $form->createView()
        ]);
    }
}