<?php

	namespace benz3d\systemInfo;

	use benz3d\systemInfo\interfaces\InfoInterface;

	class SystemInfo
	{
		/**
		 * @return InfoInterface
		 */
		public static function getInfo()
		{
			$name = strtolower(php_uname('s'));

			if (strpos($name, 'windows') !== FALSE) {
				return __NAMESPACE__ . '\os\Windows';
			} elseif (strpos($name, 'linux') !== FALSE) {
				return __NAMESPACE__ . '\os\Linux';
			}

			return NULL;
		}
	}
