<html>
<head>
  <title>Online_Repository</title>
    <script src="..\Front page\scripts\jquery-1.11.2.js"></script>
    <script src="..\Front page\scripts\MetroJs.js"></script>
    <link rel="stylesheet" href="..\Front page\css\MetroJs2.css" type="text/css"/>
    <link href="..\Front page\css\s_dashboard.css" rel='stylesheet' type='text/css' />
    <link href="..\Front page\css\style.css" rel='stylesheet' type='text/css' />

  <style>
      td{

        font-family: Verdana;
        padding:20px;
      }
      table{
        border:1px solid black;
        border-collapse:collapse;
        margin-top: -50px;
      }
      
      tr:nth-child(even){
        background-color:#cbffaa;
      }
      tr:nth-child(odd){
        background-color:#ffccb;
      }

  </style>
</head>
<body>
  <center><h1 style="font-family: Algerian; font-size:100px; color:lightblue">ASSIGNMENTS</h1></center>

<?php
$dbLink = new mysqli('127.0.0.1', 'root', '', 'assignment_upload');

if(mysqli_connect_errno()) {     
  
  die("MySQL connection failed: ".mysqli_connect_error());
}  

// Query for a list of all existing files

$sql = 'SELECT `id`, `name`, `mime`, `size`, `created`,`subject`,`title`,`deadline`,`description` FROM `file`';
$result = $dbLink->query($sql); 

 // Check if it was successfull

if($result) {  

   // Make sure there are some files in there
 
    if($result->num_rows == 0) {
    
          echo '<p>There are no files in the database</p>';
    } 
        else {        
                echo '<table width="100%">
                          <tr style="background-color:#21b6a8">
                            <td><b>Subject</b></td> 
                            <td><b>Title</b></td>
                            <td><b>Description</b></td>
                            
                            <td><b>Uploaded On</b></td>
                            <td><b>Deadline</b></td>
                             <td><b>Download</b></td>
                          </tr>';
        

                    while($row = $result->fetch_assoc()){
         
                                                           echo "<tr>";
                                                              echo "<td>{$row['subject']}</td>";
                                                              echo "<td>{$row['title']}</td>";
                                                              echo "<td>{$row['description']}</td>";           
                                                              
                                                              echo "<td>{$row['created']}</td>"; 
                                                              echo "<td>{$row['deadline']}</td>";
                                                              echo "<td><a href='get_file.php?id={$row['id']}'>Download</a></td>";
                                                              echo  "</tr>";
                    }         
        
                 echo '</table>';
    }      

    // Free the result
    $result->free(); } 

    else {   
      echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}  
// Close the mysql connection $dbLink->close(); 
?>


</body>
</html>

