<?php
$validUsers = array('steve' => 'secret1',
                    'john'  => 'secret2', 
                    'mike'  => 'secret3');

function validate ($username, $password)
{
  global $validUsers;

  if (array_key_exists($username, $validUsers) && ($validUsers[$username] == $password))
  {
    return true;
  }
  else
  {
    return false;
  } 
}