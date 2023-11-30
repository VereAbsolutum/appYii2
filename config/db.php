<?php

return [
    'class' =>  \yii\db\Connection::class,
    'dsn' => 'mysql:host=' . "mysql" . ';dbname=' . "yii_teste",
    'username' => "root",
    'password' => "aaa",
    'charset' => "utf8",

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
