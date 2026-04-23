<!DOCTYPE html>
<html>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">

<body class="w3-light-grey">

<div class="w3-display-middle" style="width:350px;">
    
    <div class="w3-card-4 w3-white w3-padding-large w3-round-large">
        
        <h2 class="w3-center w3-text-blue">Register</h2>
        
        <form action="proses_register.php" method="POST">
            
            <label>Username</label>
            <input class="w3-input w3-border w3-round" type="text" name="username" required>
            
            <label class="w3-margin-top">Password</label>
            <input class="w3-input w3-border w3-round" type="password" name="password" required>
            
            <label class="w3-margin-top">Konfirmasi Password</label>
            <input class="w3-input w3-border w3-round" type="password" name="konfirmasi" required>
            
            <button class="w3-button w3-blue w3-block w3-margin-top w3-round">
                Daftar
            </button>
        </form>
        
        <p class="w3-center w3-small w3-margin-top">
            Sudah punya akun? <a href="login.php" class="w3-text-blue">Login</a>
        </p>
        
    </div>

</div>

</body>
</html>
