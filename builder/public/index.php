<?php

use App\FrenchQueryBuilder;

require('../vendor/autoload.php');
require('../app/FrenchQueryBuilder.php');
require('../app/MySQLQueryBuilder.php');

$queryBuilder = new MySqlQueryBuilder();

$query = $queryBuilder
    ->select(['id', 'name'])
    ->from('users')
    ->where('age > 18')
    ->orderBy('name', 'ASC')
    ->build();

echo "MySQL Query: $query\n";

$queryBuilder = new FrenchQueryBuilder();

$query = $queryBuilder
    ->select(['id', 'name'])
    ->from('users')
    ->where('age > 18')
    ->orderBy('name', 'ASC')
    ->build();

echo "French Query: $query\n";
