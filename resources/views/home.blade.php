<x-admin-layout title="Data Agenda Kelas">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Toko</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Toko</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                       {{-- <a href="{{ url('homeguru/pelajaran/'.$jadwalkelas->jadwalpelajaran_id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a> --}}
                  </div>
                  <div class="card-body">
                   
                </div>
              </div>
            </div>
        </div>

        {{-- tambah absensi --}}
        <div class="modal fade" id="absensi">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Absensi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Tanggal Absensi</label>
                            <div class="col-md-8 p-0">
                                <input type="date" name="tanggal" id="tanggal" step="any" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Status Absensi</label>
                        <div class="col-md-8 p-0">
                            <select name="status_absensi" id="status_absensi" class="form-control" required>
                                <option value="semua">SEMUA HADIR</option>
                                <option value="sebagian">SEBAGIAN HADIR HADIR</option>
                            </select>
                        </div>
                    </div>
                    </section>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>