<?php include 'connection.php';?>

<?php

$query = 'select id, t1_name, t1_score, t2_name, t2_score, 	session_value from match_data ORDER BY id DESC LIMIT 1';	
$results = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

  <head>    

    <style>
      .heading {color: #178c08;
                font-family: verdana;
                font-size: 250%;
            }
      .half  {color: blue;
              font-family: verdana;
              font-size: 125%;
            }
      .team  {color: rgb(255, 0, 0);
              font-family: verdana;
              font-size: 125%;
      }
      .table-content  {color: blue;
              font-family: verdana;
              font-size: 1500%;
      }
      .foot {color: #178c08;
        font-family: verdana;
        line-height: 0.5;
        font-size: 150%;
      }
      .background    {background-color: rgb(3, 0, 0);}
      </style>
  </head>

  <body class="background">
    <!-- Header -->
    <br>
	  <br>
        <center><h1 class = "heading">South Zone Inter University Women's Handball Championship 2022-23</h1> </center>
     
    <!-- Content -->
    <?php
    while ($row = mysqli_fetch_array($results))
		{
			?>
    <br>
    <div class="half"> <h2 align= "center"> <?php echo $row['session_value']; ?> </h2></div>
    <br>
    <br>
        
    <table align= "center" border="0"style="width:90%">
    
    
      <tr>
          <th style="width:50%" class="team"><b style="font-size:200%">Team-1: <?php echo $row['t1_name']; ?></b></td>
          <th style="width:50%" class="team"><b style="font-size:200%">Team-2: <?php echo $row['t2_name']; ?></b></td>
      </tr>
      <tr class="table-content">
        <td align="center">  <?php echo $row['t1_score']; ?>  </td>
        <td align="center">  <?php echo $row['t2_score']; ?>  </td>
      </tr>
     
    </table>       
    <?php
			}
      ?>
    <!-- Footer -->
    
  <br>
  <p align="center" class="foot">Sacred Heart College(Autonomous),</p>
  <p align="center" class="foot">Thevara, Kochi.</p>
 
  </body>
</html>
