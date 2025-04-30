<?php


/*


    SuperGlobals:

        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION


*/

#$GLOBALS

// --------------------------------------------
$x = 75;

function myfunction() {
    echo $GLOBALS['x'];
}

myfunction();


    // ==


$x = 75;

function myfunction() {
    echo $x;
}

myfunction();

// --------------------------------------------


#$_SERVER

// --------------------------------------------

#example
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

/*

    $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
    $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
    $_SERVER['SERVER_ADDR']	Returns the IP address of the host server
    $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
    $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
    $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
    $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
    $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
    $_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
    $_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
    $_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
    $_SERVER['HTTP_HOST']	Returns the Host header from the current request
    $_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
    $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
    $_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
    $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
    $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
    $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
    $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
    $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
    $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
    $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
    $_SERVER['SCRIPT_NAME']	Returns the path of the current script
    $_SERVER['SCRIPT_URI']	Returns the URI of the current page

*/

// --------------------------------------------


#$_REQUEST

// --------------------------------------------


#example
$_REQUEST['firstname'];


/*
html codes

<html>
<body>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>


*/

//get request variable
$name = $_REQUEST['fname'];
echo $name;

/*

example

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>


*/

// --------------------------------------------


#$_POST

$name = $_POST['fname'];
echo $name;


/*

<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

*/


#$_GET

/*

<html>
<body>

<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="submit">
</form>

</body>
</html>

*/

#example
$name = $_GET['fname'];
echo $name;