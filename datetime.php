<?php 
	$day = date('l');
	$time = date('H:i');
	$hour = date('H');
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Using Date</title>
	</head>
	<body>
		<h1>Using Date Parts to Control Output</h1>
		<p>Today is <?php echo $day; ?>. The time is now <?php echo $time; ?>.</p>
		<?php if ($hour > 5 && $hour <12) { ?>
			<p>Good Morning.</p>
		<?php } elseif ($hour >= 12 && $hour < 18) { ?>
			<p>Good Afternoon.</p>
		<?php } elseif ($hour >= 18 && $hour < 23) { ?>
			<p>Good Evening.</p>
		<?php } else { ?>
			<p>It's late at night.</p>
		<?php } ?>
	</body>
</html>