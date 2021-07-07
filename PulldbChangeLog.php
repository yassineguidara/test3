<?php
echo"open\n";
$fichier = '././liquibase/dbchangelogPull.mysql.sql';
$cmd0='cd c:/xampp/htdocs/test3/liquibase/';

$cmd4='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';
$cmd1='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password="" update  ';
$cmd5='liquibase --changeLogFile=liquibase/dbchangelogPull.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';


if( file_exists ( $fichier)){
    unlink( $fichier ) ;
   // echo"supprimer\n";
  
    system( $cmd0 ) ;
    //echo"accedé\n";
  
  system( $cmd5 ) ;
  
  system( $cmd1 ) ;
 // echo"update\n";
 // echo"fermer\n";
    
  }else{
    system( $cmd0 ) ;
   // echo"accedé\n";

  system( $cmd5 ) ;
  
  system( $cmd1 ) ;
  //echo"update\n";
  //echo"fermer\n";
  
  }    
        
  ?>

<?php
$file1 = '././liquibase/dbchangelog.mysql.sql';
$newfile = 'sqlpull.sql';
$file='././database/crud.sql';

if (!copy($file, $newfile))
 {

       echo "La copie $file1 du fichier a échoué...\n";
}

 
  $data = file_get_contents($file1);
  file_put_contents($newfile, $data, FILE_APPEND);


//$newfile = file_get_contents('$newfile');
//$newfile .="$file1";
//file_put_contents('$newfile', $newfile);



//if (!copy($file1, $newfile)) {
 //   echo "La copie $file1 du fichier a échoué...\n";
//}
?>
  