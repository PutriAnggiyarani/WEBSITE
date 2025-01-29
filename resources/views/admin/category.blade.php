@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Tambah Kategori</h4>
                <h6>Buat Kategori Baru</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Id Kategori</label>
                            <input type="text" placeholder="Auto-generate">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" placeholder="Nama Kategori">
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Banner Kategori</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="assets/admin/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submitcategory me-2">Submit</a>
                <a href="{{url('listcategory')}}" class="btn btn-cancel">Batal</a>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection