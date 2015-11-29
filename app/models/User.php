<?php
use Illuminate\Database\Eloquent\Model as Eloqent;

class User extends Eloqent{
  protected $table = "users"; //Not needed as Eloqent will automatically associate the User class with the users table but I like to be explicit
}
