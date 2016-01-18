<?php

namespace restBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

use restBundle\Form\ProjectType;
use restBundle\Entity\Project;

class ProjectController extends FOSRestController
{
    /** get all projects
     * @return $projects
     */
    public function getProjectAction()
    {
        $projects = $this->get('doctrine')
            ->getRepository('restBundle:Project')
            ->findBy(array(), array('ord' => 'ASC'));

        return $projects;
    }

    /** edit project
     * @param Request $request
     * @return mixed
     */
    public function putProjectAction(Request $request)
    {
        return $this->postProjectAction($request);
    }

    /** create new project
     * @param Request $request
     * @return mixed
     */
    public function postProjectAction(Request $request)
    {
        $project= $request->get('project');
        $project = $this->get('doctrine')
            ->getRepository('restBundle:Project')
            ->find(!array_key_exists('id', $project) ? '' : $project['id']);

        if (!$project) {
            $project = new Project();
        }

        $form = $this->createForm(ProjectType::class, $project, array(
            'method' => $request->getMethod()
        ));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($form->getData());
            $em->flush();
            return $form->getData();
        }
        throw new HttpException(400, 'Invalid project data');
    }

    /** delete project
     * @param $id
     * @return bool
     */
    public function deleteProjectAction($id)
    {
        $project = $this->getDoctrine()
            ->getRepository('restBundle:Project')
            ->find($id);

        if ($project) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush();
            return true;
        }
        throw new HttpException(400, 'Invalid project data');
    }
}