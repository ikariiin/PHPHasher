<?php
  class HashException
  {
    protected $err_code;
    protected $err_msg;
    private function __constructor($error_code, $error_msg)
    {
      $this->err_code = $error_code;
      $this->err_msg = $error_msg;
    }
    public function getMsg()
    {
      $formatted_err = "Error Code: " . $err_code . "; The Program Exited With Message: " . $err_message . ";";
      return $formatted_err;
    }
    public function getErrCode()
    {
      $form_err_code = "Error Code: " . $err_code;
      return $form_err_code;
    }
  }
?>
