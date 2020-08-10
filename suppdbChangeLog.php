<?php
echo"open\n";
$fichier = '././liquibase/dbchangelog.mysql.sql';
$cmd0='cd c:/xampp/htdocs/test3/liquibase/';
//$cmd3='liquibase --classpath=c:/xampp/htdocs/test3/liquibase/lib/mysql-connector-java-8.0.21.jar --driver= com.mysql.cj.jdbc.Driver --changeLogFile=dbchangelog.xml --url="jdbc:mysql://localhost:3306/crud " --username=root --password="" generateChangeLog';

//$cmd2='liquibase generateChangeLog ';
$cmd4='liquibase --changeLogFile=liquibase/dbchangelog.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';
// $cmd="liquibase --changeLogFile=dbchangelog.xml --url=jdbc:mysql://127.0.0.1:3306/crud -- driver=com.mysql.jdbc.Driver --username=root   generateChangeLog   ";
$cmd1='liquibase --changeLogFile=liquibase/dbchangelog.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password="" update  ';
$cmd5='liquibase --changeLogFile=liquibase/dbchangelog.mysql.sql --url=jdbc:mysql://localhost:3306/crud --driver=com.mysql.cj.jdbc.Driver --username=root --password=""   generateChangeLog  ';


 if( file_exists ( $fichier)){
  unlink( $fichier ) ;
  echo"supprimer\n";
 /* echo"exist";
   $output = shell_exec('liquibase update'); 
  echo"$output ";}  */
  
   //  exec($cmd . " >> ././liquibase &");
  system( $cmd0 ) ;
  echo"accedé\n";
//  system( $cmd3 ) ;
system( $cmd5 ) ;

system( $cmd1 ) ;
echo"update\n";
echo"fermer\n";
  
}else{
  system( $cmd0 ) ;
  echo"accedé\n";
//  system( $cmd3 ) ;
system( $cmd5 ) ;

system( $cmd1 ) ;
echo"update\n";
echo"fermer\n";

}    


  // file_put_contents('exemple.php', '**NOUVEAU TEXTE**');
  

   //recuperer les requette
   
  //
  
  
  //
  //recuperation du contenu du fichier dans une variable


        
  ?>
<?php
$file1 = '././liquibase/dbchangelog.mysql.sql';
$newfile = 'sqlCommit.sql';
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

  