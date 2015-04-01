<?php

namespace Acme\DemoBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post Model
 *
 * @author Viktor Novikov <viktor.novikov95@gmail.com>
 * @author Alexandr Zhulev <alexandrzhulev@gmail.com>
 */
class Post
{
    /**
     * @Assert\NotBlank(message="Title should not be blank!")
     * @Assert\Length(min=8, minMessage="This value should be longer than 8 chars")
     */
    private $title;

    /**
     * @Assert\NotNull()
     * @Assert\Length(min=20)
     */
    private $content;

    /**
     * @Assert\Date()
     */
    private $date;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=10)
     */
    private $authorName;

    /**
     * @Assert\Email()
     */
    private $authorEmail;

    /**
     * @Assert\Url()
     */
    private $authorHomePage;

    /**
     * @param $authorEmail
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    /**
     * @return mixed
     */
    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    /**
     * @param $authorHomePage
     */
    public function setAuthorHomePage($authorHomePage)
    {
        $this->authorHomePage = $authorHomePage;
    }

    /**
     * @return mixed
     */
    public function getAuthorHomePage()
    {
        return $this->authorHomePage;
    }

    /**
     * @param $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}
