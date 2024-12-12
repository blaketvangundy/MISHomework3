<select class="form-select" id="eid" name = "eid">
<?php
while ($employeeItem = $employeeList->fetch_assoc()){
?>
  <option value="<?php echo $employeeItem['employee_id']?>"><?php echo $employeeItem['employee_name']?</option>
  <?php
}
?>
  <option value="3">Three</option>
</select>
