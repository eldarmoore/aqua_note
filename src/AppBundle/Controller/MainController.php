<?php
/**
 * Created by PhpStorm.
 * User: Eldar
 * Date: 7/26/2018
 * Time: 1:27 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}