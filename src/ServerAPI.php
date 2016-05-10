<?php

namespace PHPValencia;

use Silex\Application;

class ServerAPI extends Application {

	use Application\TwigTrait;

	public function init() {
		$this->register(new \Silex\Provider\TwigServiceProvider(), array('twig.path' => BASEPATH.'/views'));

		$this->setUpRoutes();
		return $this;
	}

	public function run() {
		$this->init();
		return parent::run();
	}

	protected function setUpRoutes() {
		$this->get('/', function() use($app) { 
		    return $this->render('home.twig');
		}); 
		return $this;
	}
}
