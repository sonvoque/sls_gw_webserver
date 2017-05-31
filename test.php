<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="base.css"/>
		<link rel="stylesheet" href="pure.css"/>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div id="header" class="container">
			<div id="logo">
				<img src="logo.png" title="Logo" alt="Bach Khoa"/>
			</div>
			<div id="hello">
				<p>TRƯỜNG ĐẠI HỌC BÁCH KHOA THÀNH PHỐ HỒ CHÍ MINH<br/>
				KHOA ĐIỆN-ĐIỆN TỬ, BỘ MÔN VIỄN THÔNG<br/>				
				SMART LIGHTING SYSTEM 
				</p>
			</div>
		</div>

		<div style="margin: 10px auto;">
			<table class="pure-table pure-table-bordered">
		<?php



		$servername = "localhost";
		$username = "root";
		$password = "Son100480";
		$dbname="sls_db";
		$table="sls_db";
		$column=array();
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "DESCRIBE ".$table;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    $i=0;
		    while($row = $result->fetch_assoc()) {
		    	$column[$i]=$row["Field"];
		        //echo "Field: " . $column[$i]."<br>";
		        $i++;
		    }

			echo "<thead> <tr>";
			//for($j=0; $j<$i; $j++)
			//{
			//	echo "<th>".$column[$j]."</th>";
			//}
				echo "<th>".$column[0]."</th>";
				echo "<th>".$column[1]."</th>";
				echo "<th>".$column[2]."</th>";
				echo "<th>".$column[10]."</th>";
				echo "<th>".$column[11]."</th>";
				echo "<th>".$column[12]."</th>";
				echo "<th>".$column[13]."</th>";
				echo "<th>".$column[14]."</th>";
				echo "<th>".$column[15]."</th>";
				echo "<th>".$column[20]."</th>";
				echo "<th>".$column[21]."</th>";
				echo "<th>".$column[22]."</th>";

			echo "</tr></thead>";

		} else {
		    echo "0 results";
		}


		$sql="SELECT id,node_id,ipv6_addr,rf_channel,rssi,lqi,pan_id,tx_power,app_key,next_hop_link_addr,delay,rdr FROM ".$table;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo  "<tbody>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				//for($j=0; $j<$i; $j++)
				//{
				//	echo "<td>".$row[$column[$j]]."</td>";
				//}
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['node_id']."</td>";
					echo "<td>".$row['ipv6_addr']."</td>";
					echo "<td>".$row['rf_channel']."</td>";
					echo "<td>".$row['rssi']."</td>";
					echo "<td>".$row['lqi']."</td>";
					echo "<td>".dechex($row['pan_id'])."</td>";
					echo "<td>".$row['tx_power']."</td>";
					echo "<td>".$row['app_key']."</td>";
					echo "<td>".$row['next_hop_link_addr']."</td>";
					echo "<td>".$row['delay']."</td>";
					echo "<td>".$row['rdr']."</td>";
				echo "</tr>";
			}
			echo "</tbody>";
		} else {
			echo "0 results";
		}

		?>
			</table>


		<div style="margin: 40px auto;">
			<table class="pure-table pure-table-bordered">
		<?php

		$servername = "localhost";
		$username = "root";
		$password = "Son100480";
		$dbname="sls_db";
		$table="sls_db";
		$column=array();
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "DESCRIBE ".$table;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    $i=0;
		    while($row = $result->fetch_assoc()) {
		    	$column[$i]=$row["Field"];
		        //echo "Field: " . $column[$i]."<br>";
		        $i++;
		    }

			echo "<thead> <tr>";
			//for($j=0; $j<$i; $j++)
			//{
			//	echo "<th>".$column[$j]."</th>";
			//}
				echo "<th>".$column[0]."</th>";
				echo "<th>".$column[1]."</th>";
				echo "<th>".$column[3]."</th>";
				echo "<th>".$column[4]."</th>";
				echo "<th>".$column[5]."</th>";
				echo "<th>".$column[6]."</th>";
				echo "<th>".$column[7]."</th>";
				echo "<th>".$column[8]."</th>";
				echo "<th>".$column[9]."</th>";
				echo "<th>".$column[16]."</th>";
				echo "<th>".$column[17]."</th>";
				echo "<th>".$column[18]."</th>";

			echo "</tr></thead>";

		} else {
		    echo "0 results";
		}


		$sql="SELECT id,node_id,connected,num_req,num_rep,num_timeout,last_cmd,last_seen,num_of_retrans,last_err_code,num_emergency_msg, last_emergency_msg FROM ".$table;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo  "<tbody>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				//for($j=0; $j<$i; $j++)
				//{
				//	echo "<td>".$row[$column[$j]]."</td>";
				//}
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['node_id']."</td>";
					echo "<td>".$row['connected']."</td>";
					echo "<td>".$row['num_req']."</td>";
					echo "<td>".$row['num_rep']."</td>";
					echo "<td>".$row['num_timeout']."</td>";
					echo "<td>".dechex($row['last_cmd'])."</td>";
					echo "<td>".$row['last_seen']."</td>";
					echo "<td>".$row['num_of_retrans']."</td>";
					echo "<td>".dechex($row['last_err_code'])."</td>";
					echo "<td>".$row['num_emergency_msg']."</td>";
					echo "<td>".$row['last_emergency_msg']."</td>";
				echo "</tr>";
			}
			echo "</tbody>";
		} else {
			echo "0 results";
		}

		?>
			</table>
		</div>
	</body>
</html>