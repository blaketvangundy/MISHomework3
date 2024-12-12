<h1>Assignments by Project</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Role</th>
      <th>Start Date</th>
      <th>End Date</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($assignment = $assignments->fetch_assoc()) {
?>
<tr>
  <td><?php echo $assignment['project_id']; ?></td>
  <td><?php echo $assignment['assignment_role']; ?></td>
  <td><?php echo $assignment['start_date']; ?></td>
  <td><?php echo $assignment['end_date']; ?></td>
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>
