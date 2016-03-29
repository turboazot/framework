<?php 
	require_once 'Pager.php';

	class PagerMysql extends Pager
	{
		protected $tablename;
		protected $where;
		private $parameters;

		public function __construct($tablename, $where = "", $parameters = "")
		{
			$this->tablename = $tablename;
			$this->where = $where;
			$this->parameters = $parameters;
		}

		public function get_total()
		{
			$query = "SELECT COUNT(*) FROM {$this->tablename} {$this->where}
			{$this->order}";

			$tot = Database::GetOne($query);

			if(!$tot)
			{
				ErrorHandler::setErrorMessage('Ничего не найдено!');
				ErrorHandler::getErrorMessage();
				exit();
			}

			return $tot;
		}

		public function get_parameters()
		{
			return $this->parameters;
		}

		public function get_page()
		{

			$query = "SELECT * FROM {$this->tablename}
			{$this->where}";
			$result_array = Database::GetAll($query);

			return $result_array;
		}
	}
?>