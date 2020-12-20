<?php
if(isset($_POST["ok"]))
{
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $civilite = $_POST["civilite"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $prof= $_POST["profession"];
    $ville = $_POST["ville"];
    $pays= $_POST["pays"];
    $date= $_POST["date"];


    $id = mysqli_connect("localhost3306","c1531131c_admin","TrmbSwP89CArZP","c1531131c_la_foret_des_abeilles");
    $req = "insert into ADHERENTS (Nom,Prénom,Civilite,Mail,Profession,Ville,Pays,Date,Tel) values ('$nom','$prenom','$civilite','$email','$prof','$ville','$pays','$date','$tel')";
    $res = mysqli_query($id, $req);
    echo mysqli_error($id);

} ?>