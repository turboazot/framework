<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 04.12.2015
 * Time: 2:40
 */

class Ajax
{
    protected $method;
    protected $script_name;
    protected $data;
    protected $function_name;
    protected static $total_script = "";

    public function __construct($function_name, $data, $script_name, $data_type = 'array', $method = 'POST') {
        $this->function_name = $function_name;
        $this->data = $data;
        $this->script_name = $script_name;
        $this->data_type = $data_type;
        $this->method = $method;
    }

    public function generateAjaxQuery() {
        $js = '';
        $js .= 'function ' . $this->function_name . '(' . $this->generateFunctionArguments() . ', callback_func) {' . "\n";
        $js .= "\t" . '$.ajax({' . "\n";
        $js .= "\t" . "\t" . 'type: "' . $this->method . '",' . "\n";
        $js .= "\t" . "\t" . 'url: "' . App::URL . 'ajax/' . $this->script_name . '",' . "\n";
        if($this->data_type == 'array') {
            $js .= "\t" . "\t" . 'data: (' . $this->generateDataString() . '),' . "\n";
        } elseif($this->data_type == 'formdata') {
            $js .= "\t" . "\t" . 'data: ' . $this->data[0] . ',' . "\n";
        }
        $js .= "\t" . "\t" . 'success: callback_func' . "\n";
        $js .= "\t" . '})' . "\n";
        $js .= '}' . "\n";

        return $js;
    }

    public function generateDataString () {
        $dataString = '';
        $dataString .= '{';
        $dataArrayCount = count($this->data);
        for($i = 0; $i < $dataArrayCount; $i++) {
            if($i != $dataArrayCount-1) {
                $comma = ', ';
            } else {
                $comma = '';
            }

            $dataString .= '"' . $this->data[$i] . '" : ' . $this->data[$i] . $comma;
        }
        $dataString .= '}';

        return $dataString;
    }

    public function generateFunctionArguments() {
        $argString = '';
        $dataArray = $this->data;
        $argArrayCount = count($this->data);
        for($i = 0; $i < $argArrayCount; $i++) {
            if($i != $argArrayCount-1) {
                $comma = ', ';
            } else {
                $comma = '';
            }
            $argString .= $dataArray[$i] . $comma;
        }

        return $argString;
    }

    public static function addScript($script) {
        self::$total_script .= $script . "\n\n";
    }

    public static function getTotalScript() {
        return self::$total_script;
    }
}