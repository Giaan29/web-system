<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin:50px;">
  <h2>Users</h2>
  <form action="search.php" method="GET" class="mb-3">
    <input type="text" name="search" placeholder="Search by name...">
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
  <a href="create.php" class="btn btn-primary" role="button">Add</a>
  <br>
  
  <table class="table"> 
    <thead>
      <tr>
        <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Password</th>
         <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php

$host= "localhost";
$user= "root";
$pass="";
$db = "login";
$conn= new mysqli($host,$user,$pass,$db);

if ($conn->connect_error)
{
  die ("Connection Failed: ".$conn->connect_error);
}

$sql = "SELECT * from users";
$result = $conn->query($sql);

if (!$result)
{
  die("Invalid query: ".$conn->error);

}

while($row = $result->fetch_assoc())
      {
        echo "<tr>
        <td>". $row["id"] ."</td>
        <td>". $row["name"] ."</td>
        <td>". $row["email"] ."</td>
        <td>". $row["password"] ."</td>
      
          <td>
          <a class = 'btn btn-primary btn-sm' href='edit.php?id=$row[id]'> Update </a>
          <a class = 'btn btn-danger btn-sm' href= 'delete.php?id=$row[id]'> Delete </a>
      </tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>