




<html>
    <head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <form action="" method="POST" class="p">
        <h2>Transfer Details</h2>
        <input type="text" name="name" placeholder="Transfer Amount To(customer name)"/><br/><br/>

        <input type="number" name="currentbalance" placeholder="Enter transfer amount"/><br/><br/>
        
        <script>
        function clicked() {
         return confirm('Transfered successfully');
        }
        </script>
        <input type="submit"  onclick="clicked();" name="update" value="submit" />
</body>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection,'customer');
 
if(isset($_POST['update']))
{ 
    $balance = $_POST['currentbalance'];
   
    $name = $_POST['name'];
    $query = "UPDATE customers SET `current balance`=$balance+`current balance` where name='$name'";
    $query_run = mysqli_query($connection,$query);
    
}
?>
<div class="a">
    <a style="text-decoration: none" href="view_all_customer.php"><h3>View all customer</h3></a>
</div>