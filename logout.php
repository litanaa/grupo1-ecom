<?php
require "includes/functions.php";

session_start();
session_destroy();

redirect("ingreso.php");
