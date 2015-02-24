# PHPHasher

<h3>Calling</h3>

Initialize the hasher using
  ```
  try{
    $hasher = new PHPHasher/Hasher($init_string, $algo);
    $result = $hasher->getHash();
  }
  catch(Exception $ex)
  {
    //Exception Has Occured In The Process
  }
  ```
