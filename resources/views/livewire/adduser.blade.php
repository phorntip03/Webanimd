<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
            </div>

            <div class="card-body">
              <form id="projectForm" wire:submit.prevent="insert" wire:ignore.self class="form-horizontal" onsubmit="return showConfirmationModal();">
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" wire:model="name" id="Name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" wire:model="email" id="Email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" wire:model="password" id="Password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                  <label for="Photo">Photo</label>
                  <input type="file" wire:model="photo" class="form-control" id="inputPhoto">
                </div>
                <div class="col-12">
                  <a href="#" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Create new Project" class="btn btn-success float-right">
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Confirmation Modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h4>บันทึกข้อมูลสำเร็จแล้ว</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="submitForm()">OK</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showConfirmationModal() {
      // Prevent form submission
      $('#confirmationModal').modal('show');
      return false; 
    }

    function submitForm() {
      // Close the modal
      $('#confirmationModal').modal('hide');

      // Submit the form
      document.getElementById('projectForm').submit(); // ส่งแบบฟอร์ม

      // เปลี่ยนหน้าไปยัง userdata
      window.location.href = 'userdata'; // เปลี่ยนเป็น URL ที่ถูกต้องของหน้าผู้ใช้
    }
  </script>

  <style>
    .content-header h1 {
      font-size: 2rem;
      font-weight: bold;
      color: #333;
    }
    
    .form-control {
      border-radius: 0.25rem;
      box-shadow: none;
      border-color: #ced4da;
    }
    
    .form-control:focus {
      border-color: #80bdff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    
    .modal-body h4 {
      color: #28a745; /* Green color */
    }
    
    .btn-success {
      background-color: #28a745; /* Green color */
      border-color: #28a745;
    }

    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
  </style>
</div>
