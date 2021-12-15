<div class="modal fade" id="edit_subject<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Subject</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="axie/edit_subject.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subject_code" name="subject_code" value="<?php echo $row['subject_code']; ?>" >
              <label for="floatingInput">Subject ID</label>
            </div>


            <div class="form-floating mb-3">
              <select class="form-select" id="course_id" name="course_id" aria-label="Course ID" value="<?php echo $row['course_id']; ?>">
                <option <?php if ($row['course_id'] == "None") {echo "selected";} ?>>Course ID</option>
                <option value='BSCS' <?php if ($row['course_id'] == "BSCS") {echo "selected";} ?>>BSCS</option>
                <option value='BSIT' <?php if ($row['course_id'] == "BSIT") {echo "selected";} ?>>BSIT</option>
                <option value='MIT' <?php if ($row['course_id'] == "MIT") {echo "selected";} ?>>MIT</option>
              </select>
              <label for="floatingSelect">Course ID</label>


              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_description" name="course_description" value="<?php echo $row['course_description']; ?>" >
              <label for="floatingInput">Course Description</label>
            </div>


            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="total_units" name="total_units" placeholder="Total Units">
              <label for="floatingInput">Total Units</label>
            </div>


            <div class="form-floating mb-3">
              <select class="form-select" id="with_lab_component" name="with_lab_component" aria-label="With Lab Components" value="<?php echo $row['with_lab_component']; ?>">
                <option <?php if ($row['with_lab_component'] == "None") {echo "selected";} ?>>With Lab Components</option>
                <option value='YES' <?php if ($row['with_lab_component'] == "YES") {echo "selected";} ?>>YES</option>
                <option value='NO' <?php if ($row['with_lab_component'] == "NO") {echo "selected";} ?>>NO</option>
              </select>
              <label for="floatingSelect">With Lab Components</label>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>