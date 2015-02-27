<?php
class Hasher
{
  private $present;
  private $res_hash;
  private $init_str;
  private $algo;
  private $err_msg;
  private $msg;
  private $salt;

  public function __construct($init_str, $algo)
  {
    $this->init_str = $init_str;
    if(in_array($algo, hash_algos()))
    {
      $this->algo = $algo;
      $this->salt = rand();
      $this->salt = hash("md5", $this->salt);
      $joined = $this->init_str . $this->salt;
      $res_hash = hash($this->algo, $joined);
      $this->res_hash = $res_hash;
    }
    else
    {
      $this->err_msg = "Oppsie! The Hashing You Provided Does Not Exist!!!";
    }
  }

  public function getHash()
  {
    return $this->res_hash;
  }

  public function getSalt()
  {
    return $this->salt;
  }

  public function debug()
  {
    return $this->err_msg;
  }
}
?>
