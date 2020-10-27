<?php

include 'db_config.php';
// DB table to use
$table = 'city';

// Table's primary key
$primaryKey = 'CityID';

//搜素条件
$condition = '';

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
		'db'        => 'CAddress',
		'dt'        => 'CAddress'
	),
	array(
		'db'        => 'CityID',
		'dt'        => 'CityID'
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


