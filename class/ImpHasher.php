<?php
  class ImpHasher
  {
    private $res_hash;
    private $algo;
    private $init_str;
    public function initialize($algo, $init_str)
    {
      $this->init_str = $init_str;
    }
  }
?>
