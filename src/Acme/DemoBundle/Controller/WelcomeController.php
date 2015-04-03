<?php

namespace Acme\DemoBundle\Controller;

use Acme\DemoBundle\Form\Type\PostType;
use Acme\DemoBundle\Form\Type\AuthorPostType;
use Acme\DemoBundle\Model\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    /**
     * Render form for inserting post information
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $post = new Post();
        $authorPost = new Post();
        $form = $this->createForm(new PostType(), $post);
        $author_form = $this->createForm(new AuthorPostType(), $authorPost);
        $form->handleRequest($request);
        if ($form->isValid()) {
            // do something
        }

        return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array(
            'form'        => $form->createView(),
            'author_form' => $author_form->createView()
        ));
    }
}
