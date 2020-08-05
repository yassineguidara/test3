<?php
echo"open\n";
$fichier = '././liquibase/dbchangelogPull.mysql.sql';
$cmd0='cd c:/xampp/htdocs/test3/liquibase/';

$cmd4='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';
$cmd1='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password="" update  ';
$cmd5='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';


if( file_exists ( $fichier)){
    unlink( $fichier ) ;
    echo"supprimer\n";
  
    system( $cmd0 ) ;
    echo"accedé\n";
  
  system( $cmd5 ) ;
  
  system( $cmd1 ) ;
  echo"update\n";
  echo"fermer\n";
    
  }else{
    system( $cmd0 ) ;
    echo"accedé\n";

  system( $cmd5 ) ;
  
  system( $cmd1 ) ;
  echo"update\n";
  echo"fermer\n";
  
  }    
        
  ?>


  