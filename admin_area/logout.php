<?php

session_start();

session_destroy();

echo "<script>window.open('http://localhost/ProjectCSDL','_self')</script>";

?>