<?php 
	/**
	* 
	*/
	class Validation
	{
		private static $_clientValidation;
        private static $_serverValidation;
		
		function __construct()
		{
			
		}

		public static function getClientValidation($formName, $functionName)
		{
            return new ClientValidation($formName, $functionName);
		}

        public static function getServerValidation()
        {
            return new ServerValidation();
        }

		public static function pregMatch($value, $pattern)
		{
			if(preg_match($pattern, $value) == 0)
				return false;
			else
				return true;
		}

	}

    class ClientValidation
    {
        private $_js_openScript;
        private $_js_closeScript;
        private $_js_validFieldsArray;
        private $_inputLabel;
        private $_errorLabel;
        private $_formId;
        private $_formName;
        private $_js_formName;
        private static $_formCounter=1;

        public function __construct($formName, $functionName)
        {
            $this->_js_openScript = '<script type="text/javascript">'  . "\n" .
                                            'function ' . $functionName . ' () {' . "\n";

            $this->_js_closeScript =       '}
                                      </script>';
            $this->_inputLabel = '-input';
            $this->_errorLabel = '-error';
            $this->_formId = (string)self::$_formCounter;
            $this->_formName = $formName;
            $this->_js_formName = $formName . '_' . $this->_formId;
            $this->_js_validFieldsArray = array();
        }

        public function js_initForm()
        {
            $js_formName = $this->_js_formName;
            $js = "\t" . 'var ' . $js_formName . 'Form = document.' . $this->_formName . ';' . "\n";
            return $js;
        }

        public function js_submitForm()
        {
            $js = "\t" . 'if(' . $this->_js_formName . 'Error === false) {' . "\n";
            $js .= "\t" . "\t" . 'document.' . $this->_formName . '.submit();' . "\n";
            $js .= "\t" . "\t" . 'return false;' . "\n";
            $js .= "\t" . '}' . "\n";

            return $js;
        }

        public function js_initErrorVar()
        {
            $js = "\t" . 'var ' . $this->_js_formName . 'Error = false;' . "\n";
            return $js;
        }

        public function js_initField($fieldName, $fieldVar = null)
        {
            if(isset($fieldVar)) {
                $js_fieldVar = $fieldVar;
            } else {
                $js_fieldVar = $fieldName;
            }

            $js = '';
            $js .= "\t" . 'var ' . $js_fieldVar . '_field = document.getElementsByName("' . $fieldName . '")[0];' . "\n";
            $js .= "\t" . 'var ' . $js_fieldVar . '_error = ' . $js_fieldVar . '_field.nextSibling;' . "\n";
            return $js;
        }

        public function js_validateField($fieldName, $fieldVar = null, $require=true, $pattern = null)
        {
            $js = $this->js_initField($fieldName, $fieldVar);
            if($require)
            {
                $js .= "\t" . 'if(' . $fieldVar . '_field.value === "") {' . "\n";
                $js .= "\t" . "\t" . $fieldVar . '_error.innerHTML = "Это поле нужно заполнить";' . "\n";
                $js .= "\t" . "\t" . $this->_js_formName . 'Error = true';
                $js .= "\t" . '}';
                if($pattern) $js .= "\n \telse ";
            }

            if($pattern)
            {
                $js .= "\t" . 'if(' . $pattern . '.exec(' . $fieldVar . '_field.value) == null) {' . "\n";
                $js .= "\t" . "\t" . $fieldVar . '_error.innerHTML = "Неправильный ввод данных";' . "\n";
                $js .= "\t" . "\t" . $this->_js_formName . 'Error = true';
                $js .= "\t" . '}' . "\n";
            }

            $js .= "\t" . 'else {' . "\n";
            $js .= "\t" . "\t" . $fieldVar . '_error.innerHTML = "";' . "\n";
            $js .= "\t" . '}' . "\n";

            $this->_js_validFieldsArray []= $js;
        }

        public function js_customCode($js) {
            $this->_js_validFieldsArray [] = $js;
        }

        public function js_execute()
        {
            $js = '';
            $js .= $this->_js_openScript;
            $js .= $this->js_initForm();
            $js .= $this->js_initErrorVar();

            $js_validFieldsArray = $this->_js_validFieldsArray;

            foreach ($js_validFieldsArray as $js_validField) {
                $js .= $js_validField;
            }

            $js .= $this->js_submitForm();
            $js .= $this->_js_closeScript;

            return $js;
        }
    }

    class ServerValidation
    {

    }
?>