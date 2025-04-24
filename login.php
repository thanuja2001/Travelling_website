<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sriXplore</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon " href="sriXplore 1.png">
</head>

<body>
    <div class="container-fluid">
        <div class="navbar-brand">
            <div class="icon">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.html">Home</a>
                        </li>
                        
                    </ul>
            </div>
        </div>
    </div>
    
    <form class="form1" action="loginread.php" method="post">
        <div class="content1">
            <h1 class="login">Log in</h1>
            <input class="c1" type="text" placeholder="Username" name="U_name" required><br>
            <input class="c1" type="password" placeholder="Password" name="Password" required><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <span class="Password"> <a href="#">Forgot my password?</a></span>
            </label>
            <br><button class="btn5" name="submit" type="submit">Log in</button>
            <h5 clss="h5">Still don't have an account?</h5>
            <button class="btn6" onclick="location.href='signup.php'">Sign Up</button>
        </div>
    </form>

</body>

</html>