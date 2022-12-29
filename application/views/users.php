<?php

require_once 'config.php';

$sql = "SELECT * FROM enquiry order by id desc ";

$res = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <style>
      .main{
          padding:20px 0;
      }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container main">
    <h1>Equiry users</h1><br>
    <table class="table table-hover table-bordered table-striped" id="table">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Property</th>
            <th>Message</th>
            <th>Date of Enquiry</th>
          </tr>
        </thead>
        <tbody>
            <?php $i=1; while($row = mysqli_fetch_assoc($res)): ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php $a = json_decode($row['property']); echo implode(', ', $a); ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo date('d-m-Y', strtotime($row['created_on'])); ?></td>
          </tr>
          <?php $i++; endwhile; ?>
        </tbody>
      </table>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#table').DataTable();
});
</script>

</body>
</html>