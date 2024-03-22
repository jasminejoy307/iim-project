<?=$this->extend("common_layout");?>
<?=$this->section("content");?>
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0"><i class="fa fa-thumbs-up me-2"></i>Members Import</h5>
              </div>
              <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label class="form-label">Select file</label>
                    <input type="file" class="form-control" name="file" required>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
</div>
</div>
</div>
<?=$this->endSection();?>