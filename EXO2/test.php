<?php
echo "<h1 align=center>commandes clients  </h1>";
$f1 = fopen("archivesCli1001.txt","a");
$f2 = fopen("archivesCli1004.txt","a");
if (!$ch = fopen("commande_tp4.txt","r"))
    {echo "Echec de l'ouverture du fichier";}
else {
	echo "<table border=2 ><tr bgcolor=#00effe><th> Numero de commande</th><th> Numero client </th><th>date de commande </th><th> designation article</th><th>quantite(PAl) </th><th>prix unitaire </th><th>date de livrasion </th><th>Adresse client </th></tr>";
  while(!feof($ch)) {
	  $l= fgets($ch,255);
	  $c=explode('|',$l);
	  echo "<tr>";
	   foreach($c as  $elm) {
	     echo"<td width=400px height=40px align=center>$elm</td>";
             if ($c[1]=="cli1001")
		  {
			  fputs($f1,"  ".$elm);
		   } 
		  else 
		  {fputs($f2,"  ".$elm);}
      }
    
  } echo "</tr></table>";
   fputs($f1,"\n");
   fputs($f2,"\n");
     fclose($f1);
     fclose($f2);	 
     print "Résultats bien enregistrés";
  fclose($ch);} 
  
 /* $f = fopen("archivesCli.txt","a");
  fputs($f,$a."|".$a1."|".$a2."|".$a3);
  fputs($f,"\n");
  fclose($f); 
  print "Résultats bien enregistrés";
*/
?>