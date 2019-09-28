@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita</div>

                <div class="card-body">
                  <div class="card-body">
                   
                   <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-right">ID</label>
                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-left">(!! $KategoriBerita ->id !!)</label>

                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-left">(!! $KategoriBerita -> nama!!)</label>
                   </div>

                      <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-right">User Id</label>
                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-left">(!! $KategoriBerita ->user_id !!)</label>
                   </div>

                       <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-right">Create</label>
                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-left">(!! $KategoriBerita ->created_at->format('d/m/Y H:i')!!)</label>
                   </div>

                    <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-right">Update</label>
                   	 <div class="form-group row">
                   	 <label for="name" class="col-md-4 col-form-label text-md-left">(!! $KategoriBerita ->update_at->format('d/m/Y H:i') !!)</label>
                   </div>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

