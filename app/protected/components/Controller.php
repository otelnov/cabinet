<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to 'column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='application.views.layouts.mantra-wrapped';
	
	public $user;
	
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function init()
    {
        parent::init();
        
        Yii::app()->urlManager->setAppLanguage();
        if(Yii::app()->user->id) {
            $user = new User;
            $user->online();
            $this->user = $user->findByPk(Yii::app()->user->id);
        }
        
        if(isset($_GET['iframe'])) {
            $this->layout = 'application.views.layouts.iframe';
    	} if(!user()->isGuest) {
    		$this->layout = 'application.views.layouts.gdesk';			
    	}
    }

    public function mail($to, $subject, $body)
    {
        $emailTo = $to;
        $emailFrom = Yii::app()->params['adminEmail'];
        $headers="From: $emailFrom\r\nReply-To: {$emailFrom}";
        @mail($emailTo, $subject, $body, $headers);
    }
}