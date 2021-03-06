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
     * @Assert\NotBlank(groups={"authorInfo"})
     * @Assert\Length(max=10, groups={"authorInfo"})
     */
    private $authorName;

    /**
     * @Assert\Email(groups={"authorInfo"})
     */
    private $authorEmail;

    /**
     * @Assert\Url(groups={"authorInfo"})
     */
    private $authorHomePage;

    /**
     * @Assert\File(maxSize="2M")
     */
    private $file;

    /**
     * @Assert\Image()
     */
    private $image;

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
     * @param $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}
