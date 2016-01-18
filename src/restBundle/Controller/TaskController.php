<?php

namespace restBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use restBundle\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

use restBundle\Entity\Task;

class TaskController extends FOSRestController
{
    /** get all tasks for selected project
     * @param $project
     * @return $task
     */
    public function getTaskAction($project)
    {
        $task = $this->get('doctrine')
            ->getRepository('restBundle:Task')
            ->findBy(
                array('projectId' => $project),
                array('ord' => 'ASC')
            );

        return $task;
    }

    /** edit task
     * @param Request $request
     * @return mixed
     */
    public function putTaskAction(Request $request)
    {
        return $this->postTaskAction($request);
    }

    /** create new task
     * @param Request $request
     * @return bool
     */
    public function postTaskAction(Request $request)
    {
        $task= $request->get('task');
        $task = $this->get('doctrine')
            ->getRepository('restBundle:Task')
            ->find(!array_key_exists('id', $task) ? '' : $task['id']);

        if (!$task) {
            $task = new Task();
        }

        $form = $this->createForm(TaskType::class, $task, array(
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

    /** delete task
     * @param $id
     * @return bool
     */
    public function deleteTaskAction($id)
    {
        $task = $this->getDoctrine()
            ->getRepository('restBundle:Task')
            ->find($id);

        if ($task) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();
            return true;
        }
        throw new HttpException(400, 'Invalid project data');
    }
}
