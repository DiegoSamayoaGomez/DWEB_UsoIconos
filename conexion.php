<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bavb4dnmowurlmrqbgjn-mysql.services.clever-cloud.com",
          "uvb48cm4qvyehdvp",
          "H9SIXfVzYXBrIHi4l7w5",
          "bavb4dnmowurlmrqbgjn");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }