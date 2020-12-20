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


    $id = mysqli_connect("localhost","root","","formulairetest");
    $req="select * from adherents where Mail='$email'";
$resultat=mysqli_query($id,$req);

if (mysqli_num_rows($resultat)){
    echo "<h4>Adresse mail déjà utilisée.</h4>";
    
}
else{
    $sql= "insert into adherents (Nom,Prenom,Civilite,Mail,Profession,Ville,Pays,Date,Tel) values ('$nom','$prenom','$civilite','$email','$prof','$ville','$pays','$date','$tel')";
    $res = mysqli_query($id, $sql);
    echo mysqli_error($id);
    header('Location: adhésion.html');
}

} ?>