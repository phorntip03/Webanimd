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
            <div class="row justify-content-center"> <!-- Center the row -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                        </div>

                        <div class="card-body">
                            <form wire:submit.prevent="insert" wire:ignore.self class="form-horizontal">
                                <div class="form-group">
                                    <label for="Name"> Name</label>
                                    <input type="text" wire:model="name" id="Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" wire:model="email" id="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" wire:model="password" id="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Photo">Photo</label>
                                    <input type="file" wire:model="photo" class="form-control" id="inputPhoto" placeholder="Photo">
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
</div>
