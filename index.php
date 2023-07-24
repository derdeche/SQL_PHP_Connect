
<?php 

try
{
$mysqlConnection = new PDO('mysql:host=localhost;dbname=gaulois;charset=utf8','root','');
}

//En cas d'erreur PHP rentre ds le bloc catch et affiche un message d'erreur
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$result = $mysqlConnection ->prepare('SELECT * FROM personnage');
$result->execute();
$personnage = $result ->fetchALL();


echo"<table border= '10' style= width: '100%'  >", 
            "<tr background='green'>",
                "<th>ID Personnage</th>",
                "<td>nom_personnage</td>",
                "<td>adresse_personnage</td>",
                "<td>image_personnage</td>",
                "<td>id_lieu</td>",
                "<td>id_specialite</td>",
            "<tr>";
          
        
        foreach($personnage as $personnage)
        {  
            echo"<tr>",
                "<td>".$personnage['id_personnage']."</td>",
                "<td>".$personnage['nom_personnage']."</td>",
                "<td>".$personnage['adresse_personnage']."</td>",
                "<td>".$personnage['image_personnage']."</td>",
                "<td>".$personnage['id_lieu']."</td>",
                "<td>".$personnage['id_specialite']."</td>",
                "</tr>";
        }
        
    "</table>";

?>