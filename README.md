# PHPHasher

This basic Hasher class takes in two arguments; The initial string to be hashed and the hashing algorithm you want to use.
Then we have to call the `getHash()`function to get the salted hash of your initial string

<h3>Calling and Getting the hash</h3>

Initialize and get the hash with the salt using
  ```
    $init_string = "Just A Initializing String";
    $algo = "sha256";
    $hasher = new PHPHasher/Hasher($init_string, $algo);
    $result = $hasher->getHash();
    echo $result;
  ```
