 
<style>

td.gerade {
background-color: blue;
	}

	td {
background-color: green;
	}

</style>
 <table>
 <?php
 echo 
 "<tr>
 	<th>gerade Zahl</th>
 	<th>ungerade Zahl</th>
 </tr>";


for($x = 0; $x <101; $x++)
{
	if($x % 2 == 0 )
	{
	echo "<tr><td class ='gerade'>$x</td>";
	}
	else
		{echo "<td>$x</td></tr>"; }
}
?>
</table>