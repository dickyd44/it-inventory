@extends('layouts.app') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gudang</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @include('includes.error-card')
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn bg-navy" data-toggle="modal" data-target="#createGudang"><i class="fa fa-plus"></i>
                            Tambah
                        </button>
                        @include('pages.gudang.create')
                        <table id="table-primary" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Type</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-warning mr-3" data-toggle="modal" data-target="#updateGudang{{ $item->id }}"><i class="fa fa-edit"></i>
                                            </button>
                                            @include('pages.user.update')

                                            <form action="{{ route('gudang.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>
                        </>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
@endsection
