<?=$this->extend("common_layout");?>
<?=$this->section("content");?>
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0"><i class="fa fa-thumbs-up me-2"></i>Offline Registration</h5>
              </div>
              <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Organization</label>
                    <input type="text" class="form-control" name="organization" required>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Designation</label>
                    <input type="text" class="form-control" name="designation" required>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Official mail</label>
                    <input type="text" class="form-control" name="email" required>
                    <div class="invalid-feedback"></div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile" required>
                    <div class="valid-feedback"></div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" name="password"required>
                    <div class="invalid-feedback"></div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
</div>
</div>
</div>
<?=$this->endSection();?>