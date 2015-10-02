<?php
//day.php

$dayOfWeek = date('l');
$img = strtolower ($dayOfWeek);
$img.= '.jpg';
$text='';

	if ($dayOfWeek=='Sunday') {
		$text="Sunday's child is full of grace";

	}


	if  ($dayOfWeek=='Monday') {
		$text="Monday's child is fair of face";

	}


	if ($dayOfWeek=='Tuesday') {
		$text="Tuesday's child is full of grace";

	}


	if ($dayOfWeek=='Wednesday') {
		$text="Wednesday's child is full of woe";

	}


	if ($dayOfWeek=='Thursday') {
		$text="Thursday's child has far to go";

	}

	if ($dayOfWeek=='Friday') {
		$text="Friday's child is loving and giving";

	}

	if ($dayOfWeek=='Saturday') {
		$text="Saturday's child works hard for its living";

	}


	?>

<html>

<body>
<p>

Today is <?=$dayOfWeek?>!
</p>

<img src="images/<?=$img?>" alt="Sunday" />  

<p>
<?=$text?>
</p>

</body>

</html>