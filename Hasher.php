<?php
  class PHPHasher
  {
    private $to_hash_string;
    private $algo;
    private $salt;
    protected $res_hash;
    private __constructor($init_string, $algorithm)
    {
      $this->to_hash_string = $init_string;
      if(in_array($algorithm, hash_algos()))
      {
        $this->algo = $algorithm;
      }
      else
      {
        throw new Exception("The Hashing Algorithm Is Not Present In Library");
        break;
      }
    }
    private join($to_hash_string, $algo)
    {
      $rand_number = rand();
      $salt = hash('md5', $rand_number);
      $res_hash = $to_hash_string . $salt;
      $res_hash = hash($algo, $res_hash);
    }
    protected getHash()
    {
      if(isset($res_hash))
      {
        return $res_hash;
      }
      else
      {
        throw new Exception("It seems that there is a problem!");
        break;
      }
    }
  }
?>
