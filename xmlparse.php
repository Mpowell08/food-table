<html>
   <body>
	<?php
		$dom = simplexml_load_file("data.xml");
		function getExpDate($added)
		{
			$xx = '+'.$added.' day';
			$date = date('Y-m-d');
			$newdate = strtotime($xx,strtotime($date));
			$newdate = date('m/d/y', $newdate);
			return $newdate;
		}
	?>

	<h1> Food table </h1>
	<table>

	<?php
		foreach ($dom->food as $food)
		{
			echo("<tr>");
			echo("<td>");
			print($food->item);
			echo("</td>");

			echo("<td>");
			print(getExpDate($food->life));
			echo("</td>");
			print("</tr>");
	

		}
?>
</table>
</ul>

</body>
</html>
