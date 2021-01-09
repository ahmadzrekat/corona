<style type="text/css">
  body {
    font-size: 19px;
    background: #008000;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: white;
}



.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}


.out_btn {
    text-decoration: none;
    padding: 2px 2px;
    color: white;
    border-radius: 1px;
    background: #800000;
}
.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.topnav {
  overflow: hidden;
  background-color: #008000;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 8px;
  text-decoration: none;
  font-size: 17px;
}
.topnav b {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: #008000;
  color: white;
}

</style>
<?php
session_start();
include "db_conn.php";
 $results = mysqli_query($conn, "SELECT * FROM checkout"); ?>
 <div class="topnav">
<a href="home1.php" class="out_btn">Logout</a>
<b class="active" href="#home">Table Of , <?php echo $_SESSION['name']; ?></b>
</div>
<table>
  <thead>
    <tr>
      <th>type delivery</th>
      <th>address shop</th>
      <th>image</th>
      <th>address of the buyer</th>
      <th>home number</th>
      <th colspan="1">Action</th>
    </tr>
  </thead>
  
  <?php 
  while ($row = mysqli_fetch_array($results) ) { ?>
   <?php if($row['username']==$_SESSION['name']) { ?>
    <tr>
      
      <td><?php echo $row['type_delivery']; ?></td>
      <td><?php echo $row['address_shop']; ?></td>
      <td><?php echo $row['image_url']; ?></td>
      <td><?php echo $row['address_of_you']; ?></td>
      <td><?php echo $row['home_number']; ?></td>
      <td>
        <a href="delete_user.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
      </td>
    </tr>
     <?php } ?>
  <?php } ?>
</table>

<form>