<?php
    class PHPHasher
    {
        private $algo;
        private $init_str;
        private $result;
        private $salt;
        private $errors = array();
        
        public function initialize($init_str, $algo)
        {
            $this->init_str = $init_str;
            if(in_array($algo, hash_algos()))
            {
               $this->algo = $algo;
            }
            else
            {
                $this->errors['in_arr'] = false;
            }
        }
        public function errors()
        {
            if($this->errors['in_arr'] == false)
            {
                echo "The Hashing Algorithm is not present in php library";
            }
        }
        public function execute()
        {
            $this->raw_salt = rand();
            $this->salt = hash("md5", $this->raw_salt);
            $joined = $this->init_str . $this->salt;
            $this->result = hash($this->algo, $this->init_str);
        }
        
        public function getHash()
        {
            if(isset($this->result)) return $this->result;
        }
        
        public function getSalt()
        {
            if(isset($this->salt)) return $this->salt;
        }
        
        public function getRawSalt()
        {
            if(isset($this->raw_salt)) return $this->raw_salt;
        }
    }
?>
