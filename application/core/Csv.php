<?php 
	class CSV
	{
		private $_csv_file = null;

		public function __construct($csv_file)
		{
			if(file_exists($csv_file))
			{
				$this->_csv_file = $csv_file;
			}
			else
			{
				throw new Exception("Файл " . $csv_file . " не найден!<br>");
			}
		}

		public function setCSV(Array $csv)
		{
			$handle = fopen($this->_csv_file, 'a');

			foreach ($csv as $value) {
				fputcsv($handle, explode(';', $value), ';');
			}
			fclose($handle);
		}

		public function getCSV()
		{
			$handle = fopen($this->_csv_file, "r");

			$array_line_full = array();

			while(($line = fgetcsv($handle, 0, ';')) != false)
			{
				$array_line_full[] = $line;
			}

			fclose($handle);

			return $array_line_full;
		}
	}
?>