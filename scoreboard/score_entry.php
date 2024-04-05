<?php include 'server.php';?>
<!DOCTYPE html>
<html>

  <head>    
	  <style>
      .heading {color: #178c08;
                font-family: verdana;
                font-size: 170%;
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
      .background    {background-color: rgb(253, 248, 248);}
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type=submit], input[type=reset] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
      
      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
         
      </style>
  </head>

  <body class="background">
    <!-- Header -->
    <br>
	  
        <center><h1 class = "heading">South Zone Inter University Women's Handball Championship 2022-23</h1> </center>
     
    <!-- Content -->

     <form id="contact-form" method="post" action="score_entry.php" role="form">
            <table class="tablereg" align="center">
            <tr>
                <td>Session:
                <select name="session_value">
                    <option  value="First Half" id="session">First Half</option>
                    <option  value="Second Half" id="session">Second Half</option>
                    <option  value="Full time" id="session">Full Time</option>
                    </select>
                </td>
            <tr><td>Team 1:</td><tr>
            <tr><td>College:<input type="text" name="col1" id="col1"/></td></tr>
            <tr><td>Score:<input type="text" name="s1" id="s1"/></td></tr>
            <tr><td >Team 2:</td></tr>
            <tr><td>College:<input type="text" name="col2" id="col2"/> <br></td>
            <tr><td>Score:<input type="text" name="s2" id="s2" /></td></tr>
            <tr><td align="center"> <input class="button" type="submit" value="Submit" id="send" name="submit"/>
            <tr><td align="center"><input  type="reset" value="Reset" /></td>
            </tr>
            </table>

           
        </form>

          

    <!-- Footer -->

  <br>
  <p align="center" class="foot">Sacred Heart College(Autonomous),</p>
  <p align="center" class="foot">Thevara, Kochi.</p>
  </body>
</html>
