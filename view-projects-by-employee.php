<h1>Projects by Employee</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Project ID</th>
      <th>Name</th>
      <th>Budget</th>
      <th>Start Date</th>
      <th>End Date</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($project = $projects->fetch_assoc()) {
?>
<tr>
  <td><?php echo $project['project_id']; ?></td>
  <td><?php echo $project['project_name']; ?></td>
  <td><?php echo $project['project_budget']; ?></td>
  <td><?php echo $project['start_date']; ?></td>
  <td><?php echo $project['end_date']; ?></td>
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>
