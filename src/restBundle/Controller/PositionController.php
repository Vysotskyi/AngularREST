<?php

namespace restBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class PositionController extends FOSRestController
{
    /** change position for elements (projects and tasks)
     * @param Request $request
     * @param $type
     */
    public function postPositionAction(Request $request, $type)
    {
        switch ($type) {
            case 'project':
                $projects = $request->get('projects');
                $em = $this->getDoctrine()->getEntityManager();
                foreach($projects as $project) {
                    $element = $this->getDoctrine()
                        ->getRepository('restBundle:Project')
                        ->find($project['id']);
                    $element->setOrd($project['ord']);
                    $em->persist($element);
                    $em->flush();
                }
                return $projects;
            break;
            case 'task':
                $tasks = $request->get('tasks');
                $em = $this->getDoctrine()->getEntityManager();
                foreach($tasks as $task) {
                    $element = $this->getDoctrine()
                        ->getRepository('restBundle:Task')
                        ->find($task['id']);
                    $element->setOrd($task['ord']);
                    $em->persist($element);
                    $em->flush();
                }
            break;
        }
    }
}