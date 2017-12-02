<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_POST["action"]=="insert_task"){
        insert_task ();
}

function insert_task(){
    $base= new mysqli("localhost", "root", "", "crud_task");
    $sql= "INSERT INTO task(task)"
            . "VALUES ('{$_POST["task"]}')";
    $base->query ($sql);
    $base->close();
    }
    
    header("Location:index.php");


