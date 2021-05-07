<?php
namespace cpommon\utilities;

  private static $instance = null;

  // The constructor is private
  // to prevent initiation with outer code.
  private function __construct()
  {
    // The expensive process (e.g.,db connection) goes here.
  }
 
  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Singleton();
    }
 
    return self::$instance;
  }


	public function randomString($len)
{
$string = "";
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<$len;$i++)
$string.=substr($chars,rand(0,strlen($chars)),1);
return $string;
}
}

