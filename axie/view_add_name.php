<div class="modal fade" id="add_name" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="axie/add_name.php" method="post">
        <div class="modal-body">

          <div class="form-floating mb-3">
                <select class="form-select" id="name" name="name" aria-label="name">
                  <option selected>Name</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BSIT">BSIT</option>
                  <option value="MIT">MIT</option>
                </select>
                <label for="floatingSelect">Name</label>
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
