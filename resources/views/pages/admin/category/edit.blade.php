@extends('layouts.dashboard')
@section('title')
     Edit Category Page
@endsection
@section('content')
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <div class="card">
          <div class="card-body">
             <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Categories_id</label>
                      <input type="text" name="name_id" class="form-control" value="{{ $item->name_id }}" maxlength="20" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Categories_en</label>
                      <input type="text" name="name_en" class="form-control" value="{{ $item->name_en }}" maxlength="20" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="photo" class="form-control">
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
@endsection

