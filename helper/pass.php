<?php

//Registrar Login


// traemos lo que ingreso en la caja de password
// $password $mysqli->real_escape_string($_POST["txtPassword"]);

    $password="12345678"; //ingresa el pass

    $salt = bin2hex(random_bytes(32)); //genera un random de 32 bit y lo parshea a exadecimal
    $saltedPass = $password.$salt; //concatena ambas cadenas

    $hashedPass = hash('sha256', $saltedPass);//hashea con sha256 la cadena anterior

    echo $hashedPass;


//Autenticar Logeo

//traemos el password de la caja del formulario
    //$sql = "SELECT salt, password FROM usuario WHERE ususario = '$userId'";
    //$result = $mysqli->query($sql) or die ();
   // if ($result->num_row==1) {
        //$row = $result->fetch_assoc();
        //$salt = $row['salt'];
        $saltedPass2 = $password.$salt;  //traes de la BD el pass y el salt , lo concatenas
       // $hashedPass = hash('sha256', $saltedPass);
        $hashedPass2 = hash('sha256', $saltedPass2); //lo hasheas
        echo "<br>". $hashedPass2;
        if($hashedPass == $hashedPass2){
            echo "<br> Autenticacion Validada !!";
        }else{
            echo "<br> No Valida !!";
        }

        

        //    if($hashedPass == $row['password']){
         //       $_SESSION['esAtenticado']=true;
         //   }
    
   // }

   


?>