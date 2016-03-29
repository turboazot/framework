<?php 
	
	class SuccessHandler
	{

		public function __construct()
		{
			
		}

		public static function getSuccessMessage()
		{
			if(Session::issetVar('success_messages'))
			{
				$msgArr = Session::getVar('success_messages');
				foreach ($msgArr as $successMsg) {
					echo '<div class="suc-msg-row"><img class="success-img" src="'. SITE_URL . IMG_FOLDER . 'success.png"><span>' . $successMsg . '</span></div><br>';
				}
				Session::unsetVar('success_messages');
			}
			else
				echo '';

			
		}

		public static function setSuccessMessage($message)
		{
			Session::addToArr('success_messages', $message);
		}
	}
?>