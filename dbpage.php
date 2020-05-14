<?php

if(issett($_POST['search'])) 
{
    $search= $_POST('search');
    $query= 
}





<html>
  <head>
     <title> DATA SEARCH</title>
     </style>
          table,tr,th,td
          {
             border: 1px solid black;
          }
  </head>
  <body>

    <form>
    <input type="text" name="search" placeholder="search"><br><br>
    <input type="text" name="search" value="filter"><br><br>

    <table>
        <tr>
          <th>Registeration number</th>
          <th>Name</th>
          <th>Address</th> <input type="text" name="address" value="address"><br><br>
          <th>Emailid</th>
          <th>Gender</th> 
          <th>Contact No</th>
          <th>DOB</th>
          <th>Courses</th>
          <th>SSC</th>
          <th>HSC</th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
          <td><?php echo $row['Registeration number'];?></td>
          <td><?php echo $row['Name'];?></td>
          <td><?php echo $row['Address'];?></td>
          <td><?php echo $row['Emailid'];?></td>
          <td><?php echo $row['Gender'];?></td>
          <td><?php echo $row['Contact No'];?></td>
          <td><?php echo $row['DOB'];?></td>
          <td><?php echo $row['Courses'];?></td>
          <td><?php echo $row['SSC'];?></td>
          <td><?php echo $row['HSC'];?></td>
        </tr>
        <?php endwhile;?>
     </table>
    </form>
  </body>
</html>
