<?php

namespace restBundle\Entity;

/**
 * Task
 */
class Task
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $father;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var int
     */
    private $ord;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Task
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set father
     *
     * @param integer $father
     *
     * @return Task
     */
    public function setFather($father)
    {
        $this->father = $father;

        return $this;
    }

    /**
     * Get father
     *
     * @return int
     */
    public function getFather()
    {
        return $this->father;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Task
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     *
     * @return Task
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return int
     */
    public function getOrd()
    {
        return $this->ord;
    }
}

