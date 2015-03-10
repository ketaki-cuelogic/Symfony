<?php
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller {

	public function indexAction() {
		echo "hi in index action";
		return new Response();
	}

}
?>