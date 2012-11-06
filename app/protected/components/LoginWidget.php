<?php

class LoginWidget extends CWidget
{
	private $params = array(
			
			);

	public function run()
	{
		$this->setParams(array('model' => new UserLogin));
		$this->render('loginWidget', $this->params);
	}

	public function setParams($params)
	{
		$this->params = array_merge($this->params, $params);
	}
}
