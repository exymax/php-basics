<!doctype html>
<html>
    <head>
        <title>Batura</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='wrapper'>
            <form class='add-user-form' action='data_process.php' method='POST'>
                <h3 class='form-title'>Add new user</h3>
                <input class='form-item' type='text' name='name' placeholder='Enter your name'>
                <input class='form-item' type='text' name='email' placeholder='Enter your email'>
                <input class='form-item' type='password' name='password' placeholder='Enter your password'>
                <input class='form-item submit-form' type='submit' value='Add new user'>
            </form>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src='script.js'></script>
</html>