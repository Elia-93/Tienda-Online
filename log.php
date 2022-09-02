<?php
      session_start();
      require_once "conexion.php";
      $dbName    = "tienda";
      $dbcon = conectaDB($dbName);
      $dbTabla = "usuario";
      if ($dbcon) 
      {

        $email=$_POST['email'];
        $password=$_POST['password'];
        $md5=md5($password);

        $sql = "SELECT * FROM $dbTabla WHERE email = :pemail"; 
        $resultado = $dbcon->prepare($sql);
        if ($resultado->execute([":pemail" => $email])) 
        {
          foreach ($resultado as $valida)
          if ($email==$valida['email']) 
          {

            if ($md5==$valida['password']) 
            {
                echo 'document.location.href = "perros.html";';
            }
            else 
            {
              echo '<script type="text/javascript">'; 
              echo 'alert("usuario no valida");';
              echo 'document.location.href = "login.php";';
              echo '</script>';
            }
          } 
          else 
          {
            echo '<script type="text/javascript">'; 
            echo 'alert("Contraseña no valido");'; 
            echo 'document.location.href = "login.php";';
            echo '</script>';
          }
      }
    } 
      else 
      {
        echo '<script type="text/javascript">'; 
        echo 'alert("No se ha podido establecer la conexion al servidor");'; 
        echo 'document.location.href = "index.php";';
        echo '</script>';
      }
    ?>
