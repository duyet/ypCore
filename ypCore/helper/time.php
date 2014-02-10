<?php 

function CoreDate($format, $time = 0)
{
	if (!$time) $time = time();
	return date($format, $time);
}

function translateDate($time)
{
	$replaces = array(
	// Day
		'Sunday' => 'Thứ hai', 
		'Monday' => 'Thứ ba', 
		'Tuesday' => 'Thứ tư', 
		'Wednesday' => 'Thứ năm', 
		'Thursday' => 'Thứ sáu', 
		'Friday' => 'Thứ bảy', 
		'Saturday' => 'Chủ nhật', 

	// Month
		'January' => 'Tháng giêng', 
		'February' => 'Tháng hai', 
		'March' => 'Tháng ba',
		'April' => 'Tháng tư',
		'May' => 'Tháng năm',
		'June' => 'Tháng sáu',
		'July' => 'Tháng bảy',
		'August' => 'Tháng tám',
		'September' => 'Tháng chín',
		'October' => 'Tháng mười',
		'November' => 'Tháng mười một',
		'December' => 'Tháng mười hai',
	);

	$replaces = array(
	// Day
		'Sun' => 'CN',
		'Mon' => 'Thứ 2',
		'Tue' => 'Thứ 3',
		'Wed' => 'Thứ 4'
		'Thu' => 'Thứ 5'
		'Fri' => 'Thứ 6'
		'Sat' => 'Thứ 7',

	// Month
		'Jan' => 'T.1', 
		'Feb' => 'T.2', 
		'Mar' => 'T.3', 
		'Apr' => 'T.4', 
		'May' => 'T.5', 
		'Jun' => 'T.6', 
		'Jul' => 'T.7', 
		'Aug' => 'T.8', 
		'Sep' => 'T.9', 
		'Oct' => 'T.10', 
		'Nov' => 'T.11', 
		'Dec' => 'T.12', 
	);

	return str_replace(array_keys($replaces), array_values($replaces), $time);
}

function monthName($month)
{
	--$month;
	$month_names = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	return (isset($month_names[$month]) ? $month_names[$month] : '');
}