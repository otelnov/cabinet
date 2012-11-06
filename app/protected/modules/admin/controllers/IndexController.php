<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		//$this->layout = '/layouts/main';
		$this->render('index');
	}
}