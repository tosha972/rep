<?php
function valid($arr)
{
	if ($arr['date'] == '') {
		echo "Введите дату оформления!";
		die();
	}elseif ($arr['summ'] == '') {
		echo "Введите сумму вклада!";
		die();
	}
}
if (!empty($_POST)) {
	valid($_POST);
	$summn = intval($_POST['summ']);
	$summadd = intval($_POST['summadd']);
	$percent = 0.1;
	$daysy = 365;
	$day = explode('-', $_POST['date']);
	$month = intval($day[1]);
	$year = intval($day[0]);
	$day = $day[2];
	$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	$daysn = $daysInMonth - $day1;
	$term = intval($_POST['time']);
	if ($_POST['radio'] == "no") {
		for ($i=0; $i < $term; $i++) { 
			$summn = $summn + $summn*$daysn*($percent/$daysy);
			$month++;
			if ($month > 12) {
				$year++;
				$month = 1;
			}
			$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			$daysn = $daysInMonth;
		}
		echo '<span style="color:green;">Результат</span>: ' . round($summn) . " руб";
	}elseif ($_POST['radio'] == "yes") {
		for ($i=0; $i < $term; $i++) { 
			$summn = $summn + ($summn + $summadd)*$daysn*($percent/$daysy);
			$month++;
			if ($month > 12) {
				$year++;
				$month = 1;
			}
			$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			$daysn = $daysInMonth;
			$summadd = $_POST['summadd'];
		}
		echo '<span style="color:green;">Результат</span>: ' . round($summn) . " руб";
	}
};
?>