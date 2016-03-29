<?php 
	/**
	* 
	*/
	class Database extends PDO
	{
		private static $_inst;

		public function __construct()
		{

		}

		private static function Close()
		{
			self::$_inst = null;
		}

		private static function GetInst()
		{
			if(!isset(self::$_inst))
			{
				try
				{
					self::$_inst = new PDO(App::$db_pdo_dsn, App::$db_user, App::$db_pass, array(PDO::ATTR_PERSISTENT => true));

					self::$_inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e)
				{
					self::Close();
					echo $e->getMessage();
				}
			}

			return self::$_inst;
		}

        public static function GetLastInsertId()
        {
            $result = null;
            $databaseHandler = self::GetInst();
            $result = $databaseHandler->lastInsertId();

            return $result;
        }

		public static function Execute($sqlQuery, $params = null)
		{
			try
			{
				$databaseHandler = self::GetInst();
				$statementHandler = $databaseHandler->prepare($sqlQuery);
				$statementHandler->execute($params);
			}
			catch(PDOException $e)
			{
				self::Close();
				echo $e->getMessage();
			}
		}

		public static function GetAll($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC)
		{
			$result = null;
			try
			{
				$databaseHandler = self::GetInst();
				$statementHandler = $databaseHandler->prepare($sqlQuery);
				$statementHandler->execute($params);
				$result = $statementHandler->fetchAll($fetchStyle);
			}
			catch(PDOException $e)
			{
				self::Close();
				echo $e->getMessage();
			}

			return $result;
		}

		public static function GetRow($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC)
		{
			$result = null;
			try
			{
				$databaseHandler = self::GetInst();
				$statementHandler = $databaseHandler->prepare($sqlQuery);
				$statementHandler->execute($params);
				$result = $statementHandler->fetch($fetchStyle);
			}
			catch(PDOException $e)
			{
				self::Close();
				echo $e->getMessage();
			}

			return $result;
		}

		public static function GetOne($sqlQuery, $params = null)
		{
			$result = null;
			try
			{
				$databaseHandler = self::GetInst();
				$statementHandler = $databaseHandler->prepare($sqlQuery);
				$statementHandler->execute($params);
				$result = $statementHandler->fetchAll(PDO::FETCH_NUM);
				$result = $result[0];
				$result = $result[0];
			}
			catch(PDOException $e)
			{
				self::Close();
				echo $e->getMessage();
			}
			return $result;
		}
	}
?>