<div class="modal fade" id="add_subject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Subject</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="axie/add_subject.php" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subject_code" name="subject_code" placeholder="Subject Code">
              <label for="floatingInput">Subject Code</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_id" name="course_id" placeholder="Course ID">
              <label for="floatingInput">Course ID</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_description" name="course_description" placeholder="Course Description">
              <label for="floatingInput">Course Description</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="total_units" name="total_units" placeholder="Total Units">
              <label for="floatingInput">Total Units</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="with_lab_component" name="with_lab_component" aria-label="With Lab Components">
                <option selected>Course</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
              <label for="floatingSelect">With Lab Components</label>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>