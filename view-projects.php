<div class = "row">
  <div class = "col">
    <h1>Projects</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-projects-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Budget</th>
      <th>Location</th>
        <th></th>
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
  <td><?php echo $project['project_location']; ?></td>
  <td>
    <form method = "post" action = "assignments-by-project.php">
      <input type ="hidden" name = "pid" value ="<?php echo $project['project_id']; ?>">
    <button type="submit" class="btn btn-primary">Assignments</button>
     </form>
  </td>
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>
