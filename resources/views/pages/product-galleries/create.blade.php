@extends('layouts.template')

@push('after-style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="products_id" class="form-control-label">Nama Barang</label>
                    <select name="products_id"
                        class="js-example-basic-single form-control @error('products_id') is-invalid @enderror" id="">
                        <option value="">--- Pilih Produk ---</option>
                        @foreach ($product as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('products_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*"
                        class="form-control @error('photo') is-invalid @enderror" />
                    @error('photo')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <label for="">
                        <input type="radio" name="is_default" value="1"
                            class="form-control @error('is_default') is-invalid @enderror" /> &nbsp;&nbsp;&nbsp;&nbsp;Iya
                    </label>
                    &nbsp;
                    <label for="">
                        <input type="radio" name="is_default" value="0"
                            class="form-control @error('is_default') is-invalid @enderror" /> Tidak
                    </label>
                    @error('is_default')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
