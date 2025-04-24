<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>sriXplore</title>
    <link rel="icon " href="sriXplore 1.png">
</head>

<body>
    

    <form action="signupinsert.php" method="post">
        <div class="container">
    
        <h2>Create Your Account</h2>
        <div class="section">
            <div class="section-content">
            <div class="half-width">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="half-width">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            </div>       

                <label for="username">User Name</label>
                <input type="text" id="username" name="username" required>

                <label for="email">E-mail Address</label>
                <input type="email" id="email" name="email" required>

                
                <label for="country">Country/Region</label>
                <select id="country" name="country" >
                    <option value="">Srilanka</option>
                    <option value="">India</option>
                    <option value="">Pakisthan</option>
                    <option value="">Bangaladesh</option>
                </select> 
                <div class="section-content">
                    <div class="half-width">
                        <label for="countrycode">Country code</label>
                        <input type="text" id="country_c" name="countrycode" required>
                    </div>
                    <div class="half-width">
                        <label for="phone">Mobile number</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                </div>
    </div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="current-password"><br>
                    <label for="confirmPassword">Confirm Password:</label>
                   <input type="password" id="confirmPassword" name="confirmPassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="current-password">
            <br><br>
            <center>
                <input type="submit"  name="submit" value="CREATE ACCOUNT" class="submitBtn" >
            </center>
 </div>
 <br>
</form>

</body>

</html>