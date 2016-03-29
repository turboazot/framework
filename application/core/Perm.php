<?php 
	/**
	* 
	*/
	class Perm
	{
        public static $sessionPermissions;
        public static $permissionDescriptionIndex = 'perm_desc';
		function __construct()
		{

		}

        public static function init()
        {
            self::$sessionPermissions = 'permissions';
        }

        public static function getUserRole($userId)
        {
            $userRole = Database::GetRow("SELECT *
                                          FROM user_role
                                          WHERE user_id = :userid
                                          LIMIT 1",
                                          array(':userid' => intval($userId)));
            return $userRole;
        }

        public static function getRolePermissions($roleId)
        {
            $permissions = Database::GetAll("SELECT *
                                           FROM role_perm
                                           WHERE role_id = :roleid",
                                           array(':roleid' => intval($roleId)));

            return $permissions;
        }

        public static function getUserPermissions($userId)
        {
            $userRole = self::getUserRole($userId);

            $rolePermissions = self::getRolePermissions($userRole['role_id']);

            $permissions = array();

            foreach ($rolePermissions as $permissionData) {
                $permission = Database::GetRow("SELECT *
                                                FROM permissions
                                                WHERE perm_id = :permid
                                                LIMIT 1",
                                                array(':permid' => intval($permissionData['perm_id'])));
                $permissions[]=$permission[self::$permissionDescriptionIndex];
            }

            return $permissions;
        }

        public static function setSessionPermissions($permissionArray)
        {
            Session::setVar(self::$sessionPermissions, $permissionArray);
        }

        public static function destroy()
        {
            Session::unsetVar(self::$sessionPermissions);
        }

		public static function getAccessRight($accessName)
		{
            if(Session::issetVar(self::$sessionPermissions))
            {
                $permissions = Session::getVar(self::$sessionPermissions);
                $success = array_search($accessName, $permissions);
                if($success)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
                return false;


		}
	}
?>