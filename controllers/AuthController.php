<?php

namespace app\controllers;
use yassersoliman\phpmvc\Application;
use yassersoliman\phpmvc\Controller;
use yassersoliman\phpmvc\Request;
use app\models\User;
use app\models\LoginForm;
use yassersoliman\phpmvc\Response;
use yassersoliman\phpmvc\middlewares\AuthMiddleware;

class AuthController extends Controller
{
	public function __construct()
	{
		$this->registerMiddleware(new AuthMiddleware(['profile']));
	}

	public function login(Request $request, Response $response)
	{
		$loginForm = new LoginForm();
		if ($request->isPost())
		{
			$loginForm->loadData($request->getBody());
			if ($loginForm->validate() && $loginForm->login())
			{
				$response->redirect('/');
				return true;
			}	
		}
		//$this->setLayout('auth');
		return $this->render('login', [
			'model' => $loginForm
		]);
	}
	
	public function register(Request $request)
	{
		$user = new User();
		//$this->setLayout('auth');
		if ($request->isPost()) {
			$user->loadData($request->getBody());
			
			if ($user->validate() && $user->save()) {
				Application::$app->session->setFlash('success', 'Thanks for registering');
				Application::$app->response->redirect('/');
				exit;
			}

			return $this->render('register', [
				'model' => $user
			]);
		}	
		return $this->render('register', [
			'model' => $user
		]);
	}

	public function logout(Request $request, Response $response)
	{
		Application::$app->logout();
		$response->redirect('/');
	}

	public function profile()
	{
		return $this->render('profile');
	}
}

?>
