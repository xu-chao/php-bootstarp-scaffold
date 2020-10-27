<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
// DB table to use
$table = 'ProblemDetail';

// Table's primary key
$primaryKey = 'PDID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array(
		'db'        => 'PDTime',
		'dt'        => 1,
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array(
		'db'        => 'RepairTime',
		'dt'        => 2,
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array( 'db' => 'ProblemType', 'dt' => 3 ),
	array( 'db' => 'Problem',  'dt' => 4 ),
	array( 'db' => 'Info',   'dt' => 5 ),
	array( 'db' => 'Engineer',     'dt' => 6 ),
	array( 'db' => 'Product',     'dt' => 7 ),
	array( 'db' => 'ProType',     'dt' => 8 ),
	array( 'db' => 'Mount',     'dt' => 9 ),
	array(
		'db'        => 'EndTime',
		'dt'        => 10,
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array( 'db' => 'LastingTime',     'dt' => 11 ),
	array( 'db' => 'RepairPer',     'dt' => 12 ),
	array( 'db' => 'Reason',     'dt' => 13 ),
	array( 'db' => 'Note',     'dt' => 14 ),
	array( 'db' => 'Evacuate',     'dt' => 15 ),
	array( 'db' => 'DoSolve',     'dt' => 16 ),
	array( 'db' => 'ProjectName',     'dt' => 17 ),
	array( 'db' => 'ParkName',     'dt' => 18 ),
	array( 'db' => 'CityName',     'dt' => 19 )
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => 'root',
	'db'   => 'mrm',
	'host' => '127.0.0.1'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);

