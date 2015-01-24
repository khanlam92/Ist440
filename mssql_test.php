<?php

/* Specify the server and connection string attributes. */
$serverName = "oz-ist-iissql.abington.psu.edu";

/* Get UID and PWD from application-specific files.  */
$uid = "ist440grp4sp15";
$pwd = "ist440grp4sp15";

$connectionInfo = array( "UID"=>$uid,
                         "PWD"=>$pwd,
                         "Database"=>"ist440grp4sp15");

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
     echo "Unable to connect.</br>";
     die( print_r( sqlsrv_errors(), true));
}
else
{
	echo "Success";
}