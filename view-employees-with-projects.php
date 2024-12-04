<h1>Employees with Projects</h1>
<div class="card-group">
<?php
while ($employee = $employees->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $employee['employee_name']; ?></h5>
      <p class="card-text">
    <ul class="list-group">
  <?php
   $projects = selectProjectsByEmployee($employee['employee_id']);
  while ($project = $projects->fetch_assoc()){
  ?>
      <li class="list-group-item"><?php echo $project['project_name']; ?> - <?php echo $project['project_budget']; ?> - <?php echo $project['start_date']; ?> - <?php echo $project['end_date']; ?></li>
  <?php
  }
  ?>
    </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Position: <?php echo $employee['employee_position']; ?></p>
    </div>
  </div>
<?php
}
?>
</div>
