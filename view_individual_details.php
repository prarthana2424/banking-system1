


<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <title>View Individual Details</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="view_individual_details.php" method="GET" class="p">
    <h2>View Individual Details</h2>
    <label for="fname">Enter customer name : </label>
    <input type="text" id="fname" name="fname"><br><br> 
    <input type="submit" value="submit" />
</form>
<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		} 

		h1 { 
			text-align: center; 
			color: #006600; 
			font-size: xx-large; 
			font-family: 'Gill Sans', 'Gill Sans MT', 
			' Calibri', 'Trebuchet MS', 'sans-serif'; 
		} 

		td { 
			background-color: #E4F5D4; 
			border: 1px solid black; 
		} 

		th, 
		td { 
			font-weight: bold; 
			border: 1px solid black; 
			padding: 10px; 
			text-align: center; 
		} 

		td { 
			font-weight: lighter; 
		} 
		
</style>

<table> 
<tr> 
				<th>Name</th> 
				<th>Email</th> 
                <th>Current balance</th> 
               
				
			</tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php error_reporting (E_ALL ^ E_NOTICE); ?>
            <?php
            

            $name=$_GET["fname"];
            
            
            $user = 'root'; 
            $password = ''; 
            
            // Database name is gfg 
            $database = 'customer'; 
            
            // Server is localhost with 
            // port number 3308 
            $servername='localhost:3306'; 
            $mysqli = new mysqli($servername, $user, 
                            $password, $database); 
                if ($mysqli->connect_error) { 
                                die('Connect Error (' . 
                                $mysqli->connect_errno . ') '. 
                                $mysqli->connect_error); 
                            }
                $sql =   "select * from customers where name='$name'";
                $res = $mysqli->query($sql) or die($mysqli->error);
                $row=$res->fetch_assoc();
              




        ?>
			<tr> 
				<!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN--> 
                    
			 
                    <td><?php echo $row['name'];?></td> 
                    
				<td><?php echo $row['email'];?></td> 
                <td><?php echo $row['current balance'];?></td>
                

                
                
				
			</tr>
			<?php 
				
			?> 
        </table> 
        
        <?php
        $name=$_GET["fname"];
        
        $user = 'root'; 
        $password = ''; 
        
        // Database name is gfg 
        $database = 'customer'; 
        
        // Server is localhost with 
        // port number 3308 
        $servername='localhost:3306'; 
        $mysqli = new mysqli($servername, $user, 
                        $password, $database); 
            if ($mysqli->connect_error) { 
                            die('Connect Error (' . 
                            $mysqli->connect_errno . ') '. 
                            $mysqli->connect_error); 
                        }
            $sql =   "select * from customers where name='$name'";
            $res = $mysqli->query($sql) or die($mysqli->error);
            $row=$res->fetch_assoc();
            
            
    
            
    
    
    
    ?>
    <div class="a">			
				<a href="transfer.php"><h3>Transfer Money </h3></a>
			</div> 
    
    
</body>