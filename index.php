<?PHP 
    $rows=5; 
    $colums=3; 
    echo '<html><body>'; 
    echo '<table border="2">'; 

    for ($i = 1; $i <= $rows; $i++){ 
        echo '<tr>'; 

        for ($j = 1; $j <= $colums; $j++){ 
            if ((($i+$j)%2)==0) {
                $c="green";
            } else {$c="red";} 

            echo '<td bgcolor='.$c.'><font color="yellow">'.$i,$j.'</font></td>'; 
            } /*end of for $j*/ 

    echo '</tr>'; 
    } /*end of for $i*/ 

    echo '</table>'; 

    //PHPinfo ();

    echo '<br/>';
    echo 'Розработчик: Супрун А.И';
    echo '<br/>';
    echo '<br/>';
    echo 'Группа: ИКМ-219а';
    echo '<br/>';
    echo '<br/>';


    // Table Add
    $a[] = 0;
    $b[] = 0;
    $add[] = 0;

    for ($i = 1; $i <= 9; $i++){
        echo $i, ' Table Add: ';
        $a[$i] = $i;
        for ($j = 1; $j <= 9 ; $j++) { 

            $b[$j] = $j;

            $add[$i] =  $a[$i] * $b[$j];
            echo $a[$i], ' * ', $b[$j] , ' = ', $add[$i], '; ' ;
            //echo '<br/>';
        }
        echo '<br/>'; echo '<br/>';
    }


    // Color
    echo '<style>
        #table_Color {width: 100%; height: 200px;}
        .col1 {width: 100px; height: 100px;}
    </style>';


    echo '<table border = 0; id =table_Color;>';
    for ($i=0; $i<=255; $i += 100)
    {
        echo '<tr class = "col1">';
     
        for ($j=0; $j<=255; $j += 100)
        {
            for ($k=0; $k<=255; $k += 100)
            {
                echo '<td style="background-color:RGB('.$i.', '.$j.', '.$k.'); id = ""; class = "col1"> </td>'; //rgb('.$i.', '.$j.', '.$k.')
            }
        }
     
        echo '</tr>';
    }
    echo'</table>';


    echo '</body> 
</html>'; ?>