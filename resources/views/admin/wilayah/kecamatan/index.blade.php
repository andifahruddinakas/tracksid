@extends('layouts.index')

@section('title', 'Daftar Kecamatan')

@section('content_header')
    <h1>Kecamatan<small class="font-weight-light ml-1 text-md">Daftar Kecamatan</small></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th width="5%" nowrap>NO</th>
                                    <th width="10%" nowrap>KODE WILAYAH</th>
                                    <th>NAMA PROVINSI</th>
                                    <th>NAMA KABUPATEN</th>
                                    <th>NAMA KECAMATAN</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                searchable: true,
                orderable: true,
                ajax: "{{ route('kecamatan.datatables') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'kode_kecamatan',
                        name: 'kode_kecamatan'
                    },
                    {
                        data: 'nama_provinsi',
                        name: 'nama_provinsi'
                    },
                    {
                        data: 'nama_kabupaten',
                        name: 'nama_kabupaten'
                    },
                    {
                        data: 'nama_kecamatan',
                        name: 'nama_kecamatan'
                    },
                ],
                order: [
                    [1, 'asc']
                ]
            });
        });
    </script>
@endsection
