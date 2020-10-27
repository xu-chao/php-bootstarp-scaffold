<?php
session_start();
include 'db_config.php';

//@$cityname = '芜湖';
if(empty($_SESSION['user'])){
    echo "error!";
    header('location: ../index.html');
}
else if ($_SESSION['permission'] == 1) {
	$condition = 'Permission = 3 ';
}
else
{
	$cityname = $_SESSION['cityname'];
	$condition = 'Permission = 3 AND CityName = '.'\''.$cityname.'\'';
}

// DB table to use
$table = 'role';

// Table's primary key
$primaryKey = 'RoleID';

//搜素条件
//$condition = 'Permission = 4 AND CityName = '.'\''.$cityname.'\'';
//$condition = 'Permission = 4 ';
//print($cityname);
//print($condition);

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array(
		'db'        => 'UserName',
		'dt'        => 'UserName'
	),
	array(
		'db'        => 'RoleName',
		'dt'        => 'RoleName'
	),
	array( 'db' => 'PremissionInfo',  'dt' => 'PremissionInfo' ),
	array( 'db' => 'StaffID',   'dt' => 'StaffID' ),
	array( 'db' => 'Tel',     'dt' => 'Tel' ),
	array( 'db' => 'Email',     'dt' => 'Email' ),
	array( 'db' => 'CityName',     'dt' => 'CityName' ),
	array( 'db' => 'RoleID',     'dt' => 'RoleID' )
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
?>


