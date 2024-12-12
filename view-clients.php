<div class = "row">
  <div class = "col">
    <h1>Clients</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-projects-newform.php";
?>
  </div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Company Name</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($client = $clients->fetch_assoc()) {
?>
<tr>
  <td><?php echo $client['client_id']; ?></td>
  <td><?php echo $client['client_name']; ?></td>
  <td><?php echo $client['client_email']; ?></td>
  <td><?php echo $client['client_phone']; ?></td>
  <td><?php echo $client['company_name']; ?></td>
  
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>
