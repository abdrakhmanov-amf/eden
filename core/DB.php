<?php 
    class DB{
      //  public function __construct()
      //  {
      //     session_start();
      //  }
 //   connect to base
        private static function connect()
        {
           return mysqli_connect("localhost","root","root","Eden");
        }
//    
        public static function Query($q)
        {
           return mysqli_query(self::connect() , $q  );
        }

        public static function Assoc($q)
        {
           return mysqli_fetch_assoc($q);
        }

        public static function NumRow($q)
        {
           return mysqli_num_rows($q);
        }
    }

?>