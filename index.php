<?PHP 
 $rows=5; 
 $colums=3; 
 echo '<html><body>'; 
 echo '<table border="2">'; 
 for ($i=1;$i<=$rows;$i++) 
 { echo '<tr>'; 
 for ($j=1;$j<=$colums;$j++) 
 { if ((($i+$j)%2)==0){$c="green";} else {$c="red";} 
 echo '<td bgcolor='.$c.'><font color="yellow">'.$i,$j.'</font></td>'; 
 } /*end of for $j*/ 
 echo '</tr>'; 
 } /*end of for $i*/ 
echo '</table>'; 



echo '</body> 
</html>'; ?>