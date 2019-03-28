<?php

// Cookie

// setcookie("username","taguchi");
// setcookie("username","taguchi", time()+60*60);
setcookie("username","taguchi", time()-60*60);

echo $_COOKIE["username"];
