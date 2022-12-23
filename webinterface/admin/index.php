<?php

include("include/includes.php");
#include("".$pathprefix."include/menu.inc.php");
connect_to_db();

$image = Image::all();

#$teaser = Teaser::all(array(
#	'conditions' => array('status = ?', 'public') )
#);

printHeader();

echo "<table>
<tr>
	<th>ID</th>
	<th>Image</th>
	<th>Prompt</th>
	<th>Erstellungsdatum</th>
</tr>";

$i=0;
foreach($image as $item) { $i++; echo "<tr>\n\t<td>".$item->id."</td>\n\t<td><img src='".$item->link."' width='50px'></td>\n\t<td>".$item->prompt."</td>\n\t<td>".$item->timestamp->format('d.m.Y H:i:s')."</td>\n</tr>";}


#strtotime($movie->showdate->format('long')))
echo "</table>";

echo "
<!-- Ende Inhalt -->
";
printFooter();
?>
