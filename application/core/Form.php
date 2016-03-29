<?php 
	/**
	* 
	*/
	class Form
	{
		private $_actionName; // Form: атрибут action
		private $_methodName; // Form: атрибут method
        private $_formName; // Form: атрибут name формы
		private $_className; // Form: атрибут class
        private $_hiddenInput; // Form: скрытое поле
		private $_submitButton; // Form: атрибут name кнопки формы
		private $_inputs; // Form: input-ы формы
		private $_labels; // Form: label-ы формы
		private $_fields; // Form: все поля формы
        private $_bodyContainer; // Form: атрибут class body-контейнера формы
        private $_columnDelimiterArray; // Form: массив, разделяющий поля на части
        private $_columnContainer; // Form: атрибут class контейнера колонки формы
        private $_validateInst;
        private $_validateFunctionName;

        #Конструктор формы
		public function __construct($actionName, $methodName, $hiddenName, $formName = null, $validateFunctionName = null, $className = null, $columnDelimiterArray = null)
		{
			$this->_actionName = $actionName;
			$this->_methodName = $methodName;
            $this->_formName = $formName;
			$this->_className = $className;
			$this->_hiddenName = $hiddenName;
			$this->_inputs = array();
			$this->_labels = array();
			$this->_fields = array();
            $this->_bodyContainer = 'form-body';
            $this->_columnDelimiterArray = $columnDelimiterArray;
            $this->_columnContainer = 'form-column';
            $this->_validateInst = Validation::getClientValidation($this->getFormName(), $validateFunctionName);
            $this->_validateFunctionName = $validateFunctionName;
		}

        public function getFormName()
        {
            return $this->_formName;
        }

        #Добавить input
		public function addInput($inputName, $inputType, $inputValue = null, $isChecked = null,
                                 $inputLabel = null, $placeholder = null, $onFocus = null, $onBlur = null, $maxLength = null, $min = null, $max = null, $onKeyPress = null, $multiple=null)
		{
            #Если присутствует атрибут value
            if(!empty($inputValue))
                $valueHtml = ' value="' . $inputValue . '"'; // Определяем его
            #Если нет
            else
                $valueHtml = ''; // Заменяем его пустой строкой

            #Если присутствует атрибут checked
            if(isset($isChecked))
                $checkedHtml = ' checked'; // Определяем его
            #Если нет
            else
                $checkedHtml = ''; // Заменяем его пустой строкой

            #Если присутствует label
            if(isset($inputLabel))
                $inputLabelHtml = '<span>' . $inputLabel . '</span>'; // Определяем его
            #Если нет
            else
                $inputLabelHtml = ''; // Заменяем его пустой строкой

            if(isset($maxLength))
                $lengthHtml = ' maxlength="' . $maxLength . '"';
            else
                $lengthHtml = '';

            if(isset($min))
                $minHtml = ' min="' . $min . '"';
            else
                $minHtml = '';

            if(isset($max))
                $maxHtml = ' max="' . $max . '"';
            else
                $maxHtml = '';

            if(isset($onKeyPress))
                $onkeypressHtml = ' onkeypress="' . $onKeyPress . '"';
            else
                $onkeypressHtml = '';

            if(isset($placeholder)) {
                $placeholderHtml = ' placeholder="' . $placeholder . '"';
                $focusHtml = ' onfocus="this.placeholder = \'\'"';
                $blurHtml = ' onblur="this.placeholder = \'' . $placeholder .  '\'"';
            } else {
                if(isset($onFocus))
                    $focusHtml = ' onfocus="' . $onFocus . '"'; // Определяем его
                #Если нет
                else
                    $focusHtml = ''; // Заменяем его пустой строкой

                if(isset($onBlur))
                    $blurHtml = ' onblur="' . $onBlur . '"'; // Определяем его
                #Если нет
                else
                    $blurHtml = ''; // Заменяем его пустой строкой
            }

            if(isset($multiple)) {
                $multipleHtml = ' multiple';
            } else {
                $multipleHtml = '';
            }

            if($inputType == 'text' or $inputType == 'password') {
                $inputErrorLabelHtml = '<div class="input-error"></div>';
            } else {
                $inputErrorLabelHtml = '';
            }

            $inputHtml = '<input name="' . $inputName .
                '" type="' . $inputType .
                '"' . $valueHtml .
                $checkedHtml .
                $placeholderHtml .
                $focusHtml .
                $blurHtml .
                $lengthHtml .
                $minHtml .
                $maxHtml .
                $onkeypressHtml .
                $multipleHtml .
                '>' .
                $inputErrorLabelHtml .
                $inputLabelHtml; // Определяем html-код input'a
            $this->_inputs[$inputName] = $inputHtml; // Добавляем текущий input к общему массиву input'ов

		}

        #Получить input по атрибуту name
		public function getInput($inputName)
		{
			return $this->_inputs[$inputName]; // Возвращаем input
		}

        #Добавить label
		public function addLabel($labelValue, $inputName=null, $className = null)
		{
            #Если присутствует атрибут class
			if(isset($className))
				$classHtml = ' class="' . $className . '"'; // Определяем его
            #Если нет
			else
				$classHtml = ''; // Заменяем его пустой строкой

			$labelHtml = '<div' . $classHtml . '><span>' . $labelValue . '</span></div>'; // Определяем html-код label'a
			$this->_labels[$inputName] = $labelHtml; // Добавляем текущий label к общему массиву label'ов
		}

        #Получить label по атрибуту name
		public function getLabel($inputName)
		{
			return $this->_labels[$inputName]; // Возвращаем label
		}

        #Добавить поле
		public function addField($labelVal=false, $inputArray, $className=null, $newLine = true)
		{
            $inputsHtml = ''; // Определяем строку с html-кодом поля


            $input_counter = 0; // Определяем счётчик для input'ов

            foreach ($inputArray as $input) {
                if(gettype($input) == 'array') {
                    #Если это поле с checkbox'ами
                    if($input['type'] == 'checkbox')
                    {
                        $input_counter_string = '[' . $input_counter . ']'; // Определяем строку с ID input'a
                        $input_counter++; // Инкрементируем счётчик
                        $input['name'] .= $input_counter_string; // Добавляем к атрибуту name ID input'a
                    }

                    if(isset($input['value']))
                        $inputValue = $input['value'];
                    else
                        $inputValue = null;

                    $this->addInput($input['name'], $input['type'], $inputValue, $input['checked'],
                        $input['label'], $input['placeholder'],$input['onfocus'], $input['onblur'],
                        $input['length'], $input['min'], $input['max'], $input['onkeypress'], $input['multiple']);
                    if(count($inputArray) > 1 && $newLine == true)
                        $inputsHtml .= $this->getInput($input['name']) . '<br>';
                    else
                        $inputsHtml .= $this->getInput($input['name']);
                } elseif(gettype($input) == 'string') {
                    $inputsHtml .= $input;
                }

                    #Валидация поля со стороны клиента
                    if(isset($input['validation'])) {
                        $validationArray = $input['validation'];
                        if(isset($validationArray['required']) && isset($validationArray['pattern'])) {
                            $this->_validateInst->js_validateField(
                                $input['name'],
                                $validationArray['label'], true, $validationArray['pattern']);
                        } else if(isset($validationArray['required']) && !isset($validationArray['pattern'])) {
                            $this->_validateInst->js_validateField(
                                $input['name'],
                                $validationArray['label'], true);
                        } else if(!isset($validationArray['required']) && isset($validationArray['pattern'])) {
                            $this->_validateInst->js_validateField(
                                $input['name'],
                                $validationArray['label'], false, $validationArray['pattern']);
                        }
                    }

            }
			if(isset($className))
					$classHtml = ' class="' . $className . '"';
				else
					$classHtml = '';

            if($labelVal)
			    $this->addLabel($labelVal, $inputArray[0]['name']);

			if($labelVal)
				$fieldHtml = '<div' . $classHtml . '>' . $this->getLabel($inputArray[0]['name']) . $inputsHtml . '</div>';
			else
				$fieldHtml = '<div' . $classHtml . '>' . $inputsHtml . '</div>';

			$this->_fields[] = $fieldHtml;
		}

		public function setSubmit($submitValue, $submitName = null, $submitClass=null, $submitType="input", $clear = false)
		{
			if(isset($submitClass))
				$classHtml = ' class="' . $submitClass . '"';
			else
				$classHtml = '';

            if(isset($submitName))
                $nameHtml = ' name="' . $submitName . '"';
            else
                $nameHtml = '';

            if($submitType == 'input')
                if(isset($submitValue))
                    $valueHtml = ' value="' . $submitValue . '"';
                else
                    $valueHtml = '';


            if(isset($this->_validateFunctionName))
            {
                $typeHtml = ' type="button"';
                $onclickHtml = ' onclick = "' .$this->_validateFunctionName . '()"';
            } else {
                $typeHtml = ' type="submit"';
                $onclickHtml = '';
            }

            $hiddenInput = '<input type="hidden"' . $nameHtml . '>';

            if($clear) {
                $submitHtml = '<div class="clear"></div>';
            } else {
                $submitHtml = '';
            }
			$submitHtml .= $hiddenInput /*.
                '<div ' . $classHtml . '>'*/;
            if($submitType == 'input')
                $submitHtml .= '<input ' . $onclickHtml . $typeHtml . $valueHtml . '>'/* .
                '</div>'*/;
            else
                $submitHtml .= '<a href="#" ' . $classHtml . $onclickHtml . $typeHtml . '>' . $submitValue  . '</a>';
			$this->_submitButton = $submitHtml;
		}

		public function getSubmit()
		{
			return $this->_submitButton;
		}

        public function setCustomValidation($js) {
            $this->_validateInst->js_customCode($js);
        }

        public function getClientValidation()
        {
            return $this->_validateInst->js_execute();
        }

		public function execute()
		{
            $html = '';
            $formAttributesHtml = '';

			$formClass = $this->_className;
            $formName = $this->_formName;
            $formAction = $this->_actionName;
            $formMethod = $this->_methodName;
            $formBodyContainer = $this->_bodyContainer;
            $formColumnDelimiterArray = $this->_columnDelimiterArray;
            $formColumnContainer = $this->_columnContainer;

            $formAttributesHtml .= ' action="' . $formAction . '"';
            $formAttributesHtml .= ' method="' . $formMethod . '"';

			if(isset($formClass))
				$formAttributesHtml .= ' class="' . $formClass . '"';
			else
				$formAttributesHtml .= '';

            if(isset($formName))
                $formAttributesHtml .= ' name="' . $formName . '"';
            else
                $formAttributesHtml .= '';

			$html .= '<form' . $formAttributesHtml . '>';
            $html .= '<div class="' . $formBodyContainer . '">';
            if(isset($formColumnDelimiterArray))
            {
                $html .= '<div class="' . $formColumnContainer . '">';
                for($i=0; $i<count($this->_fields); $i++)
                {
                    $html .= $this->_fields[$i];

                    if(in_array($i, $formColumnDelimiterArray)) {
                        $html .= '</div><div class="' . $formColumnContainer . '">';
                    }
                }
                $html .= '</div>';
            }
            else
            {
                for($i=0; $i<count($this->_fields); $i++)
                {
                    $html .= $this->_fields[$i];
                }
            }

			$html .= $this->getSubmit();
            $html .= '</div>';
			$html .= '</form>';

            return $html;
		}

        public static function postToSession($post_isset, $post_variableName, $session_variableName)
        {
            if(Post::issetVar($post_isset))
            {
                $post_arrayName = 'POST';
                Session::addToArr($post_arrayName, $session_variableName, $_POST[$post_variableName]);
                unset($_POST);

                $currentLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                Route::location($currentLink);
                exit();
            }
        }

        public static function issetPostVar($variableName)
        {
            return Session::issetArrKey('POST', $variableName);
        }

        public static function getPostVar($variableName)
        {
            return Session::getArrKey('POST', $variableName);
        }

        public static function deletePostFromSession()
        {
            Session::unsetVar('POST');
        }

        public static function checkboxToString($checkboxArray, $delimiter)
        {
            $resultArray = array();
            if(isset($checkboxArray)) {
                foreach ($checkboxArray as $checkboxValue) {
                    if(isset($checkboxValue))
                    {
                        $resultArray[] = $checkboxValue;
                    }
                }
            }
            $resultString = implode($delimiter, $resultArray);

            return $resultString;
        }

        public static function isValueInCheckboxString($checkboxValue, $checkboxString, $delimiter)
        {
            $checkboxArray = explode($delimiter,$checkboxString);

            $isValueInArray = in_array($checkboxValue, $checkboxArray);
            if($isValueInArray) {
                return true;
            } else {
                return null;
            }
        }

	}
?>