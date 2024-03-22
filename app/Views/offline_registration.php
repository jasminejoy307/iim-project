<?=$this->extend("common_layout");?>
<?=$this->section("css");?>
<!-- Application vendor css url -->
<link rel="stylesheet" href="<?= base_url('assets/cssbundle/dataTables.min.css')?>">
<?=$this->endSection();?>

<?=$this->section("content");?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0"><i class="fa fa-thumbs-up me-2"></i>Offline Registration</h5>
            <!-- <a href="<?= base_url('add_registration') ?>" class="btn btn-primary">Add new</a> -->
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
                        <div class="col text-md-end">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" id="editbox" data-bs-target="#newModal"><i class="fa fa-plus ms-2"></i> Add New</button>
          </div>
                    </div>
                    <div class="container">
    <form id="searchForm">
        <input type="text" id="searchName" name="searchName" placeholder="Search by Name">
        <input type="text" id="email" name="email" placeholder="Search by Email">
        <input type="text" id="mobile" name="mobile" placeholder="Search by Mobile">
        <button type="submit" id="searchButton" class="btn btn-primary">Search</button>
    </form>
                    <div class="card-body">
                        <table id="tablelist" class="table card-table table-hover align-middle mb-0">
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
                            <tbody>
                            <?php $i=1; ?>
                        <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $member['name'] ?></td>
                            <td><?= $member['organization'] ?></td>
                            <td><?= $member['designation'] ?></td>
                            <td><?= $member['email'] ?></td>
                            <td><?= $member['mobile'] ?></td>
                            <td>
                            <button type="button" title="Edit" class="btn btn-outline-primary btn-sm editButton" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $member['id'] ?>" data-name="<?= $member['name'] ?>" data-organization="<?= $member['organization'] ?>" data-designation="<?= $member['designation'] ?>" data-email="<?= $member['email'] ?>" data-mobile="<?= $member['mobile'] ?>">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                       
                        
                    </tbody>
                        </table>
                    </div>
                   
                    <div class="modal fade" id="newModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Offline Registration</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="form-validate" class="needs-validation" novalidate enctype="multipart/form-data">
                      <?php 
				?>
                          <div class="row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Name. <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="name" placeholder="Enter Name." required name="name" title="Enter Name." minlength="1" maxlength="20">
                              <div class="invalid-feedback">Name is required.</div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label for="organization" class="col-sm-4 col-form-label">Organization<font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="organization" placeholder="Enter organization" required name="organization" title="Enter organization" minlength="3" maxlength="50">
                              <div class="invalid-feedback">Organization is required.</div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label for="designation" class="col-sm-4 col-form-label">Designation <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="designation" placeholder="Enter Designation" required name="designation" title="Enter Designation" minlength="3" maxlength="50">
                              <div class="invalid-feedback">Designation is required.</div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="mail" class="col-sm-4 col-form-label">Email <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="mail" placeholder="Enter Email" required name="mail" title="Enter mail" minlength="3" maxlength="20">
                              <div class="invalid-feedback">Email is required.</div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="phone" class="col-sm-4 col-form-label">Mobile <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="phone" placeholder="Enter phone" required name="mobile" title="Enter mobile" minlength="10" maxlength="10">
                              <div class="invalid-feedback">mobile is required.</div>
                            </div>
                          </div>    
                  
                          <div class="modal-footer" style="border-top:none;">
                                <button type="button" class="btn btn-danger closeButton newButton" data-bs-dismiss="modal" id="closeButton"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                <button type="button" id="resetButton" class="btn btn-warning resetButton newButton" style="display: none;"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                                <button type="submit" id="saveButton" class="btn btn-success newButton"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>                        
                                
                                <div id="msg_box" style="margin-top: 20px;"></div>
                                
                                <div class="col-12 col-md-12">					
                    				<label class="lbl_status"></label>							
                    			  </div>
            			  <div class="col-12" id="dv-valerrors"></div>
                          </div>      
                        </form>
                    </div>
                    
                  </div>
                </div>
              </div>


              <!-- Modal for edit -->

              <div class="modal fade" id="editModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Offline Registration</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="form-validate-edit" class="needs-validation" novalidate >
                      <input type="hidden"  id="idEdit" name="idEdit">
                      <?php 
				                ?>
                          <div class="row mb-3">
                            <label for="nameEdit" class="col-sm-4 col-form-label">Name. <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nameEdit" required name="nameEdit" title="Enter Name." minlength="1" maxlength="20">
                              <div class="invalid-feedback">Name is required.</div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label for="organizationEdit" class="col-sm-4 col-form-label">Organization<font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="organizationEdit"  required name="organizationEdit" title="Enter organization" minlength="3" maxlength="50">
                              <div class="invalid-feedback">Organization is required.</div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label for="designationEdit" class="col-sm-4 col-form-label">Designation <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="designationEdit"  required name="designationEdit" title="Enter Designation" minlength="3" maxlength="50">
                              <div class="invalid-feedback">Designation is required.</div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label for="mailEdit" class="col-sm-4 col-form-label">Official mail <font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="mailEdit"  required name="mailEdit" title="Enter email" minlength="3" maxlength="20">
                              <div class="invalid-feedback">Email is required.</div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="phoneEdit" class="col-sm-4 col-form-label">Mobile<font color="#FF0000">*</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="phoneEdit"  required name="phoneEdit" title="Enter mobile" minlength="10" maxlength="10">
                              <div class="invalid-feedback">Mobile is required.</div>
                            </div>
                          </div>
                              
                                              
                  
                          <div class="modal-footer" style="border-top:none;">
                                <button type="button" class="btn btn-danger closeButton newButton" data-bs-dismiss="modal" id="closeButton"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                <button type="button" id="resetButton" class="btn btn-warning resetButton newButton" style="display: none;"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                                <button type="submit" id="saveButton" class="btn btn-success newButton"><i class="fa fa-floppy-o" aria-hidden="true"></i> update</button>                        
                                
                                <div id="msg_box" style="margin-top: 20px;"></div>
                                
                                <div class="col-12 col-md-12">					
                    				<label class="lbl_status"></label>							
                    			  </div>
            			  <div class="col-12" id="dv-valerrors"></div>
                          </div>      
                        </form>
                    </div>
                    
                  </div>
                </div>
              </div>
            
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection();?>

<?=$this->section("js");?>
<!-- jQuery first, then DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/js/bundle/dataTables.bundle.js')?>"></script>
<script>

$(document).ready(function() {
    $('#tablelist').DataTable({
        "processing": true,
        "serverSide": false, 
    });


$('#form-validate').on('submit', function(event) {
        event.preventDefault();
        if(validateForm()) {
            submitFormData();
        }
    });
    function validateForm() {
        var isValid = true;
        var name = $('#name').val().trim();
        if (name === '') {
            isValid = false;
            $('#name').addClass('is-invalid');
            $('#name').siblings('.invalid-feedback').text('Name is required.');
        } 
        else if (!isValidName(name)) {
            isValid = false;
            $('#name').addClass('is-invalid').siblings('.invalid-feedback').text('Name can only contain letters.');
        }
        else {
            $('#name').removeClass('is-invalid');
            $('#name').siblings('.invalid-feedback').text('');
        }
        if ($('#organization').val().trim() === '') {
            isValid = false;
            $('#organization').addClass('is-invalid');
            $('#organizationme').siblings('.invalid-feedback').text('organization is required.');
        } else {
            $('#organization').removeClass('is-invalid');
            $('#organization').siblings('.invalid-feedback').text('');
        }
        
        if ($('#designation').val().trim() === '') {
            isValid = false;
            $('#designation').addClass('is-invalid');
            $('#designation').siblings('.invalid-feedback').text('designation is required.');
        } else {
            $('#designation').removeClass('is-invalid');
            $('#designation').siblings('.invalid-feedback').text('');
        }
        if ($('#mail').val().trim() === '') {
            isValid = false;
            $('#mail').addClass('is-invalid');
            $('#mail').siblings('.invalid-feedback').text('mail is required.');
        } else {
            $('#mail').removeClass('is-invalid');
            $('#mail').siblings('.invalid-feedback').text('');
        }
        var phone = $('#phone').val().trim();
        if (phone === '') {
            isValid = false;
            $('#phone').addClass('is-invalid');
            $('#phone').siblings('.invalid-feedback').text('mobile is required.');
        }
        else if (!isValidMobile(phone)) {
            isValid = false;
            $('#phone').addClass('is-invalid').siblings('.invalid-feedback').text('Mobile Number should be 10 digits.');
        }
         else {
            $('#phone').removeClass('is-invalid');
            $('#phone').siblings('.invalid-feedback').text('');
        }
        var email = $('#mail').val();
            if (!isValidEmail(email)) {
                $('#mail').addClass('is-invalid');
                $('#mail').siblings('.invalid-feedback').text('Enter valid Email.');
                isValid = false;
            } else {
                $('#mail').removeClass('is-invalid');
            }
            if (!isValid) {
                event.preventDefault();
            }
            return isValid;
    }

        function isValidEmail(email) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        function isValidMobile(mobile) {
            var mobilePattern = /^\d{10}$/;
            return mobilePattern.test(mobile);
        }
        function isValidName(name) {
        var nameRegex = /^[A-Za-z]+$/;
        return nameRegex.test(name);
    }
        
    function submitFormData() {
        $.ajax({
            url: '<?= base_url('add-new') ?>',
            method: 'POST',
            data: $('#form-validate').serialize(), 
            success: function(response) {
               // alert("Success");
                window.location.reload();
                },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
$('.editButton').on('click', function() {
     //alert('God is Love');
            var id = $(this).data('id');
            var name = $(this).data('name');
            var organization = $(this).data('organization');
            var designation = $(this).data('designation');
            var email = $(this).data('email');
            var mobile = $(this).data('mobile');
            $('#editModal #idEdit').val(id);
            $('#editModal #nameEdit').val(name);
            $('#editModal #organizationEdit').val(organization);
            $('#editModal #designationEdit').val(designation);
            $('#editModal #mailEdit').val(email);
            $('#editModal #phoneEdit').val(mobile);
        });
        

        $('#form-validate-edit').on('submit', function(event) {
            event.preventDefault();
            if(validateFormEdit()) {
            $.ajax({
                url: '<?= base_url('update-member') ?>',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // $('#editModal').modal('hide');
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
          }
        });

        function validateFormEdit() {
        var isValid = true;
        var name = $('#nameEdit').val().trim();
        if (name === '') {
            isValid = false;
            $('#nameEdit').addClass('is-invalid');
            $('#nameEdit').siblings('.invalid-feedback').text('Name is required.');
        } else if (!isValidName(name)) {
            isValid = false;
            $('#nameEdit').addClass('is-invalid').siblings('.invalid-feedback').text('Name can only contain letters.');
        }
        else {
            $('#nameEdit').removeClass('is-invalid');
            $('#nameEdit').siblings('.invalid-feedback').text('');
        }
        if ($('#organizationEdit').val().trim() === '') {
            isValid = false;
            $('#organizationEdit').addClass('is-invalid');
            $('#organizationEdit').siblings('.invalid-feedback').text('organization is required.');
        } else {
            $('#organizationEdit').removeClass('is-invalid');
            $('#organizationEdit').siblings('.invalid-feedback').text('');
        }
        if ($('#designationEdit').val().trim() === '') {
            isValid = false;
            $('#designationEdit').addClass('is-invalid');
            $('#designationEdit').siblings('.invalid-feedback').text('designation is required.');
        } else {
            $('#designationEdit').removeClass('is-invalid');
            $('#designationEdit').siblings('.invalid-feedback').text('');
        }
        if ($('#mailEdit').val().trim() === '') {
            isValid = false;
            $('#mailEdit').addClass('is-invalid');
            $('#mailEdit').siblings('.invalid-feedback').text('mail is required.');
        } else {
            $('#mailEdit').removeClass('is-invalid');
            $('#mailEdit').siblings('.invalid-feedback').text('');
        }
        var phone = $('#phoneEdit').val().trim();
        if (phone === '') {
            isValid = false;
            $('#phoneEdit').addClass('is-invalid');
            $('#phoneEdit').siblings('.invalid-feedback').text('mobile is required.');
        }
        else if (!isValidMobile(phone)) {
            isValid = false;
            $('#phoneEdit').addClass('is-invalid').siblings('.invalid-feedback').text('Mobile Number should be 10 digits.');
        }
         else {
            $('#phoneEdit').removeClass('is-invalid');
            $('#phoneEdit').siblings('.invalid-feedback').text('');
        }
        var email = $('#mailEdit').val();
            if (!isValidEmail(email)) {
                $('#mailEdit').addClass('is-invalid');
                $('#mailEdit').siblings('.invalid-feedback').text('Enter valid Email.');
                isValid = false;
            } else {
                $('#mailEdit').removeClass('is-invalid');
            }
            if (!isValid) {
                event.preventDefault();
            }
            return isValid;
    }
    

        
        $('#searchForm').on('submit', function(event) {
        event.preventDefault();
        var name = $('#searchName').val().trim();
        var email = $('#email').val().trim();
        var mobile = $('#mobile').val().trim();
        
        // Perform search
        $.ajax({
            url: '<?= base_url('search-members') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                name: name,
                mobile: mobile,
                email: email
            },
            success: function(response) {
                appendToTable(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    function appendToTable(data) {
        $('#tablelist tbody').empty();
        var serialNumber = 1;
        $.each(data, function(index, member) {
            var row = '<tr>' +
                '<td>' + serialNumber++ + '</td>' +
                '<td>' + member.name + '</td>' +
                '<td>' + member.organization + '</td>' +
                '<td>' + member.designation + '</td>' +
                '<td>' + member.email + '</td>' +
                '<td>' + member.mobile + '</td>' +
                '<td>' +
                '<button type="button" title="Edit" class="btn btn-outline-primary btn-sm editButtonFilter" data-bs-toggle="modal" data-bs-target="#editModal" data-id="' + member.id + '" data-name="' + member.name + '" data-organization="' + member.organization + '" data-designation="' + member.designation + '" data-mail="' + member.email + '" data-phone="' + member.mobile + '">' +
                '<i class="fa fa-pencil"></i>' +
                '</button>' +
                '</td>' +
                '</tr>';
             $('#tablelist tbody').append(row);
        });
    }

});

$(document).on('click', '.editButtonFilter', function() {
    var id = $(this).data('id');
    var name = $(this).data('name');
    var organization = $(this).data('organization');
    var designation = $(this).data('designation');
    var email = $(this).data('mail');
    var mobile = $(this).data('phone');

    // Set values in the edit modal inputs
    $('#editModal #idEdit').val(id);
    $('#editModal #nameEdit').val(name);
    $('#editModal #organizationEdit').val(organization);
    $('#editModal #designationEdit').val(designation);
    $('#editModal #mailEdit').val(email);
    $('#editModal #phoneEdit').val(mobile);
});
</script>
<?=$this->endSection();?>
