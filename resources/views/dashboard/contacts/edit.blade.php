@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/contacts/{{ $contact->id }}" method="POST" class="d-flex flex-column gap-2">
      @method('put')
      @csrf
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Jenis</label>
        <div class="input-group input-group-static mb-4">
          <select class="form-control" name="socmed_id">
            <option disabled>Pilih Jenis</option>
            @foreach ($socmeds as $socmed)
            <option value="{{ $socmed->id }}" @if ($contact->socmed->id == $socmed->id) selected @endif>{{ $socmed->name }}</option>
            @endforeach
          </select>
        </div>
        @error('socmed_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Nama / Title</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name',$contact->name) }}">
        </div>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="deskripsi" class="fw-bold">Deskripsi</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi',$contact->deskripsi) }}">
        </div>
        @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="link" class="fw-bold">Link</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="link" name="link" placeholder="Link" value="{{ old('link',$contact->link) }}">
        </div>
        @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
    </form>
  </div>
</div>
@endsection