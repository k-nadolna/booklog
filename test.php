         <?php
        include ('php/config.php');

        if(isset($_POST['submit'])){
            $name = htmlspecialchars($_POST['name']);

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo "<p class='text-danger'> Email is incorrect.</p>";
            }else{
              $password = $_POST['password'] ?? '';
              $confirm = $_POST['confirm'] ?? '';

              if($password !== $confirm){
                echo "<p class='text-danger'>Password and Confirm password isn't the same.</p>";
              }else{
                $check = $con->prepare("SELECT id FROM users WHERE Email = ?");
                $check->bind_param("s", $email);
                $check->execute();
                $check->store_result();

                if($check->num_rows > 0){
                  echo "<p class='text-danger'>Ten e-mail jest już zarejestrowany!</p>";
                }else{
                   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $con->prepare("INSERT INTO users(Name,Email,Password) VALUES (?,?,?)");

                $stmt->bind_param("sss", $name, $email, $hashed_password);

                if($stmt->execute()){
                  echo "<p class='text-success'>Rejestracja zakończona sukcesem</p>";
                }else{
                  echo "<p class='text-danger'>Błąd" . $stmt->error . "</p>";
                }

                $stmt->close();
                }
               $check->close();
              }
            }
          }
  
      ?>