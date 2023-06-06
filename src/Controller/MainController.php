<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener;

class MainController extends Controller
{
    public function index()
    {
        $this->twig->display('Main/index.html.twig');
    }

}
