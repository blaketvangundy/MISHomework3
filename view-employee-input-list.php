<select class="form-select" id="eid" name = "eid">
<?php
while ($employeeItem = $employeeList->fetch_assoc()){
  $seltext = "";
  if($selectedEmployee == $employeeItem['employee_id']){
    $seltext = "selected";
  }
?>
  <option value="<?php echo $employeeItem['employee_id']?>"<?=$seltext?>><?php echo $employeeItem['employee_name']?></option>
  <?php
}
?>
</select>
