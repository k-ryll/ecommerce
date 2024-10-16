
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shabuseller</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
    
<body>
    <div class="container">

    
<?php 
     include 'includes/header.php';
     include 'classes/User.php';
    ?>
    <h1>Welcome</h1>
    <h2>Registered Users:</h2>
    <ul>
        <?php
        if (isset($_SESSION['users'])) {
            foreach ($_SESSION['users'] as $user) {
                echo "<li>Username: " . htmlspecialchars($user->username) . "</li>";
                echo "<li>Email: " . htmlspecialchars($user->email) . "</li>";
            }
        } else {
            echo "No registered users.";
        }
        ?>
    </ul></div>
</body>
</html>
<?php 
   
    include 'includes/footer.php';
?>
