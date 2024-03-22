<?=$this->extend("common_layout");?>
<?=$this->section("content");?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0"><i class="fa fa-thumbs-up me-2"></i>Offline Registration</h5>
            <a href="<?= base_url('add_registration') ?>" class="btn btn-primary">Add new</a>
        </div>
    </div>
</div>

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-2 row-deck">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Offline Registration List</h6>
                    </div>
                    <div class="card-body">
                        <table id="member-table" class="table card-table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Organization</th>
                                    <th>Designation</th>
                                    <th>Official Mail</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#member-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('fetch-members') ?>",
                "type": "POST"
            },
            "columns": [
                {"data": "id"},
                {"data": "name"},
                {"data": "organization"},
                {"data": "designation"},
                {"data": "official_mail"},
                {"data": "mobile"},
                {"data": null, "render": function(data, type, row) {
                    return '<a href="<?= base_url('edit_member') ?>/' + data.id + '">Edit</a>';
                }}
            ]
        });
    });
</script>

<?=$this->endSection();?>
