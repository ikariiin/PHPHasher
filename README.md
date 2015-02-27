# PHPHasher

This is a basic hasher class which return you a salted hash of your specified algorithm. You can see which we have used using `$hasher->getSalt();`

<h3>Initialize the hasher using: </h3>

  ```
    $init_str = "Just a initial string"
    $algo = "ripemd256'; // any hashing algorithm you like or required and is available in php can be specified here
    $hasher = new PHPHasher/Hasher($init_str, $algo);
  ```

<h3> Getting the Salt </h3>

 <blockquote> We use a random number generated from the php `rand()` function as the raw salt . </blockquote>
 
 After the initializtion use:
 
 ```
  $salt_used = $hasher->getSalt();
  echo $salt;
 ```
 
 <h3> Getting the salted hash </h3>
 
 <blockqoute> Here the hashing algorithm is executed along with the hashed salt </blockqoute>
 
 ```
  $result_hash = $hasher->getHash();
  echo $result_hash;
 ```
 
 <h3> If you find something is wrong like anything isn't coming along with the `$hasher->getSalt() or $hasher->getHash()` </h3>
 
 <blockqoute> You can use the `$hasher->debug()` method </blockquote>
 
```
  $debug = $hasher->debug();
  echo $debug;
  // If you find always something like 'Oppsie! The Hashing You Provided Does Not Exist!!!' type of message, this is because the hashing algorithm you specified when instanciating the class is not present in php
```

```
And To find all the hashing algorithms in PHP, You Can Use:
  <?php
    echo '<pre>';
      var_dump(hash_algos());
    echo '</pre>';
  ?>
```
