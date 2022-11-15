<?php
namespace App\classes;
class start
{
    public function __construct()
    {
        echo "System Is Running";
    }
    public function run(){
        header('Location: action.php?pages=home');
    }
}