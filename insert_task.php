<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<form name="data_task" action="conexion.php" method="POST">
    <table border="1">
         <tbody>
            <tr>
                <td>Task</td>
                <td><input type="text" name="task" value="" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="action" value="insert_task" /></td>
                <td><input type="submit" value="Send" name="Send" /></td>
            </tr>
        </tbody>
    </table>
</form>

    