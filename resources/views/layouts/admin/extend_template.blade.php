@extends('layouts.admin.master')
@section('title')
<!--     <h4>Data Kategori</h4>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKategori">
        Tambah
    </button> 
    Judul Halaman -->
@stop
@section('currentMenuLink')
    <!-- {{ route('dashboard.kategori.index') }} route halaman saat ini -->
@stop
@section('currentMenu')
    <!-- Data Kategori -->
    <!-- Menu saat saat ini -->
@stop
@section('currentPage')
    <!-- Daftar Kategori -->
    <!-- judul halaman -->
@endsection
@section('content')
<!--     <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <TH>Aksi</TH>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $no => $kategori)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>
                                    <form action="{{route('dashboard.kategori.destroy', $kategori->id)}}" id="formDeleteKategori" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('dashboard.kategori.show', $kategori->id) }}"
                                        class="btn btn-info">Lihat</a>
                                    <button type="button" class="btn btn-warning" onclick="editKategori('{{$kategori->id}}','modalKategori')">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="formConfirmation('Hapus Data {{$kategori->nama_kategori}}')">Hapus</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade text-left" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="labelModalKategori">
                        Tambah Kategori
                    </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{route('dashboard.kategori.store')}}" method="post" id="formKategori">
                    @csrf
                    <div class="modal-body">
                        <label for="email">Nama Kategori: </label>
                        <div class="form-group mt-1">
                            <input id="nama_kategori" type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control" />
                        </div>
                        <input type="hidden" name="id" id="id_kategori">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="btn-save" onclick="formConfirmation('Simpan Kategori?')" class="btn btn-primary ms-1">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
@stop
<!-- @push('js')
    <script>
        function editKategori(id, modal){
            $.ajax({
                type: "get",
                url: `{{url('dashboard/kategori/${id}/edit')}}`,
                dataType: 'json',
                success: function(res){
                $("#nama_kategori").val(res.nama_kategori);
                $("#id_kategori").val(res.id);
                  $(`#${modal}`).modal('show');  
                  $(`#labelModalKategori`).text('Edit Kategori');
                  $(`#btn-save`).text('Update');
                }
            });
        }
    </script>
@endpush -->
