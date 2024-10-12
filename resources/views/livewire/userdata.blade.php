<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-right">
                 
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card" style="max-width: 1100px; margin-left: auto; margin-right: 0;"> <!-- เพิ่มขนาดการ์ด -->
            <div class="card-header text-left">
                <h3 class="card-title">Projects</h3>
                <div class="d-flex justify-content-left mb-3">
                    <!-- Align the Create User button to the center -->
                    <a class="btn btn-primary btn-sm" href="{{route('adduser')}}">
                        <i class="fas fa-folder"></i> Create User
                    </a>
                </div>
            </div>

            <!-- Card body -->
            <div class="card-body p-0">
                <!-- Adjusted table width and alignment -->
                <table class="table table-striped projects" style="width: 100%; text-align: center;"> <!-- เปลี่ยนให้ข้อความชิดกลาง -->
                    <thead>
                        <tr>
                            <th style="width: 5%; padding: 10px;">#</th> <!-- เพิ่ม padding -->
                            <th style="width: 25%; padding: 10px;">Name</th> <!-- เพิ่ม padding -->
                            <th style="width: 25%; padding: 10px;">Email</th> <!-- เพิ่ม padding -->
                            <th style="width: 15%; padding: 10px;">Photo</th> <!-- เพิ่ม padding -->
                            <th style="width: 20%; padding: 10px;" class="text-center">Manage</th> <!-- เพิ่ม padding -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td style="padding: 10px;">{{$item->id}}</td> <!-- เพิ่ม padding -->
                            <td style="padding: 10px;">{{$item->name}}</td> <!-- เพิ่ม padding -->
                            <td style="padding: 10px;">{{$item->email}}</td> <!-- เพิ่ม padding -->
                            <td style="padding: 10px;">
                                <!-- Adjusted image size to smaller -->
                                <img alt="Avatar" class="table-avatar" src="{{asset('storage')}}/{{$item->profile_photo_path}}" style="width: 30px; height: 30px;">
                            </td>
                            <td class="project-actions text-right" style="padding: 10px;"> <!-- เพิ่ม padding -->
                                <a class="btn btn-info btn-sm" href="{{route('edituser',['id'=>$item->id])}}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>
                                <a class="btn btn-danger btn-sm" wire:click='delete({{$item->id}})' href="#">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination centered -->
            <div class="d-flex justify-content-center">
                {{$data->links()}}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
