<h1>Projects</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Budget</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($project = $projects->fetch_assoc() {
?>
<tr>
  <td><?php echo $project['project_id']; ?></td>
  <td><?php echo $project['project_name']; ?></td>
  <td><?php echo $project['project_budget']; ?></td>
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>
