<?php

unset($_SESSION['name']);
session_destroy();

header('Location: /forms-register');
