<?php

session_start();
include 'db_config.php';

//@$cityname = '芜湖';
if(empty($_SESSION['user'])){
    echo "error!";
    header('location: ../index.html');
}
else if ($_SESSION['permission'] == 1) {
	$condition = '1=1 ORDER BY PDID DESC LIMIT 50 ';
}
else
{
	$cityname = $_SESSION['cityname'];
	$condition = '1=1 AND CityName = '.'\''.$cityname.'\''.'ORDER BY PDID DESC LIMIT 50 ';
}

// DB table to use
$table = 'problemdetail';

// Table's primary key
$primaryKey = 'PDID';

//搜素条件
//$condition = '1=1 ORDER BY PDTime DESC LIMIT 50';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array(
		'db'        => 'RepairTime',
		'dt'        => 'RepairTime'
	),
	array(
		'db'        => 'ProblemType',
		'dt'        => 'ProblemType'
	),
	array(
		'db'        => 'Problem',
		'dt'        => 'Problem'
	),
	array(
		'db'        => 'Engineer',
		'dt'        => 'Engineer'
	),
	array(
		'db'        => 'Product',
		'dt'        => 'Product'
	),
	array(
		'db'        => 'Mount',
		'dt'        => 'Mount'
	),
	array(
		'db'        => 'LastingTime',
		'dt'        => 'LastingTime'
	),
	array(
		'db'        => 'RepairPer',
		'dt'        => 'RepairPer'
	),
	array(
		'db'        => 'Reason',
		'dt'        => 'Reason'
	),
	array(
		'db'        => 'Evacuate',
		'dt'        => 'Evacuate'
	),
	array(
		'db'        => 'DoSolve',
		'dt'        => 'DoSolve'
	),
	array(
		'db'        => 'ProjectName',
		'dt'        => 'ProjectName'
	),
	array(
		'db'        => 'ParkName',
		'dt'        => 'ParkName'
	),
	array(
		'db'        => 'CityName',
		'dt'        => 'CityName'
	),
	array(
		'db'        => 'PDID',
		'dt'        => 'PDID'
	)
);

// SQL server connection information
$sql_details = array(
	'user' => $mysql_username,
	'pass' => $mysql_password,
	'db'   => $mysql_database,
	'host' => $mysql_server_name
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $condition )
);


