<div>
   {-- วาง Content profile --}
 <!-- Content Wrapper. Contains page content -->
 <!-- pcoded-content Wrapper -->
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <!-- Profile Section Start -->
                        <div class="col-md-6">
                            <div class="content-wrapper">
                                <!-- Content Header (Page header) -->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Profile {{ $username }}</h1>
                                            </div>
                                            <div class="col-sm-6">
                                                <ol class="breadcrumb float-sm-right">
                                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                    <li class="breadcrumb-item active">User Profile</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div><!-- /.container-fluid -->
                                </section>

                                <!-- Main content -->
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Profile Image -->
                                                <div class="card card-primary card-outline">
                                                    <div class="card-body box-profile">
                                                        <div class="text-center">
                                                            <img class="profile-user-img img-fluid img-circle"
                                                                 src="{{Asset('storage')}}/{{auth()->user()->profile_photo_path}}"
                                                                 alt="User profile picture">
                                                        </div>
                                                        <h3 class="profile-username text-center">
                                                            {{ auth()->user()->name }} <br>
                                                            {{ auth()->user()->email }}
                                                        </h3>
                                                        <br>
                                                        <ul class="list-group list-group-unbordered mb-5">
                                                            <li class="list-group-item">
                                                                <b>Followers</b> <a class="float-right">1,322</a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <b>Following</b> <a class="float-right">543</a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <b>Friends</b> <a class="float-right">13,287</a>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <!-- Settings Section -->
                        <div class="col-md-6">
                            <div class="content-wrapper">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="settings">
                                                <form wire:submit.prevent="update" wire:ignore.self class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" wire:model="username" class="form-control" id="inputName" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" wire:model="email" class="form-control" id="inputEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPhoto" class="col-sm-3 col-form-label">Photo</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" wire:model="photo" class="form-control" id="inputPhoto" placeholder="Photo">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="offset-sm-3 col-sm-9">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- Profile Section End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




  <!-- /.content-wrapper -->
</div>
