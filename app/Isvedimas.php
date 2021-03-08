<?php

namespace JobsApp;

class Isvedimas{
    static public function printData($data){

        echo"<tr>";
        foreach($data as $item){

            echo"<th>$item</th>";

        }
        echo"</tr>";

    }



}