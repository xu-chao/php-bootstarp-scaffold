<?php
session_start();
include 'db_config.php';

//@$cityname = '芜湖';
if(empty($_SESSION['user'])){
    echo "error!";
    header('location: ../index.html');
}
else if ($_SESSION['permission'] == 1) {
	$condition = '';
}
else
{
	$cityname = $_SESSION['cityname'];
	$condition = 'CityName = '.'\''.$cityname.'\'';
}

// DB table to use
$table = 'tb_equipmentlist';

// Table's primary key
$primaryKey = 'ID';

//搜素条件
//$condition = '';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array(
		'db'        => 'CityName',
		'dt'        => 'CityName'
	),
	array(
		'db'        => 'ParkName',
		'dt'        => 'ParkName'
	),
	array( 'db' => 'ProjectName', 'dt' => 'ProjectName' ),
	array( 'db' => 'SysType',  'dt' => 'SysType' ),
	array( 'db' => 'EquName',   'dt' => 'EquName' ),
	array( 'db' => 'EquType',     'dt' => 'EquType' ),
	array( 'db' => 'Mount',     'dt' => 'Mount' ),
	array( 'db' => 'Unit',     'dt' => 'Unit' ),
	array( 'db' => 'Department',     'dt' => 'Department' ),
	array( 'db' => 'Beizhu',     'dt' => 'Beizhu' ),
	array(
		'db'        => 'BillState',
		'dt'        => 'BillState'
	),
	array( 'db' => 'BillDate',     'dt' => 'BillDate' ),
	array( 'db' => 'Advanced',     'dt' => 'Advanced' ),
	array( 'db' => 'Arrival',     'dt' => 'Arrival' ),
	array( 'db' => 'Applicant',     'dt' => 'Applicant' ),
	array( 'db' => 'OddNum',     'dt' => 'OddNum' ),
	array( 'db' => 'Purchaser',     'dt' => 'Purchaser' ),
	array( 'db' => 'ContractStatus',     'dt' => 'ContractStatus' ),
	array( 'db' => 'Whip',     'dt' => 'Whip' ),
	array( 'db' => 'ProductionState',     'dt' => 'ProductionState' ),
	array( 'db' => 'Address',     'dt' => 'Address' ),
	array( 'db' => 'ID',     'dt' => 'ID' )
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


