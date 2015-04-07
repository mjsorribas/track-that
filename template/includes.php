<?php
/* 
	includes.php - A bunch of reusable things including functions and prepared statements
	Created On: 3/13/15
	Created by: Dan Salmon
*/

/*
*
*  FUNCTIONS
*
*/

/*
* formatTime() - Takes a dateTime MySQL object and converts it to a string the format specified.
* 
* Created: 3/13/15
*/
function formatTime ($dateTime) {

	// What format to return the dateTime as. 
	// http://php.net/manual/en/function.date.php
	$format = "n/j/y g:ia"; // m/d/yy H:MMapm

	return date_format(date_create($dateTime),$format);
}


/*
*
*  PREPARED STATEMENTS
*
*/
$qryGetProjectsByStatus = "SELECT `proj_id`, `proj_name` FROM `tbl_projects` WHERE `proj_status`=?";

?>