<?php
$sth = $pdo->prepare('SELECT name, colour, calories FROM fruit');
$sth->execute();
$red = $sth->fetchAll();