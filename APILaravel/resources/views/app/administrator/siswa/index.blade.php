@extends("app/administrator/layouts/template")

@section("app_title", "Data Siswa")

@section("app_content")

<section class="section">
    <div class="section-header">
        <h1>Data Siswa</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">
                <a href="{{ url('/app/admin/home') }}">Home</a>
            </div>
            <div class="breadcrumb-item">Data Siswa</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" id="btnTambah" data-target="#modalTambah" data-toggle="modal">
                        <i class="fa fa-plus"></i> Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-hover" id="tampilData">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tambah Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa fa-plus"></i> Tambah Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control input-sm" placeholder="Masukkan Nama">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin"> Jenis Kelamin </label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_hp"> No. HP </label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No. HP">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ayah"> Nama Ayah </label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ibu"> Nama Ibu </label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                <button type="button" class="btn btn-primary" id="btn-tambah">
                    <i class="fa fa-plus"></i> Tambah
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END -->

<!-- Edit Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa fa-pencil"></i> Edit Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id">
                <input type="hidden" id="oldNoHp">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" name="nama" id="nm" class="form-control input-sm" placeholder="Masukkan Nama">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin"> Jenis Kelamin </label>
                            <select name="jenis_kelamin" id="jk" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_hp"> No. HP </label>
                            <input type="text" name="no_hp" id="hp" class="form-control" placeholder="Masukkan No. HP">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <textarea name="alamat" id="address" cols="30" rows="10" class="form-control" placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ayah"> Nama Ayah </label>
                            <input type="text" name="nama_ayah" id="ayah" class="form-control" placeholder="Masukkan Nama Ayah">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ibu"> Nama Ibu </label>
                            <input type="text" name="nama_ibu" id="ibu" class="form-control" placeholder="Masukkan Nama Ibu">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                <button type="button" class="btn btn-success" id="btn-edit">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END -->

@endsection

@section("app_scripts")

<script type="text/javascript">

    function tampilData() {
        let empTable = document.getElementById("tampilData").getElementsByTagName("tbody")[0];
        empTable.innerHTML = "";
        $.ajax({
            url: "{{ url('') }}/api/siswa",
            type: "GET",
            success: function (response) {
                let no = 1;
                for (let key in response.data) {
                    if (response.data.hasOwnProperty(key)) {
                        let val = response.data[key];
                        let newRow = empTable.insertRow(-1);
                        let nomer = newRow.insertCell(0);
                        let namaCell = newRow.insertCell(1);
                        let alamatCell = newRow.insertCell(2);
                        let aksiCell = newRow.insertCell(3);

                        nomer.innerHTML = no++;
                        namaCell.innerHTML = val['nama'];
                        alamatCell.innerHTML = val['alamat'];
                        aksiCell.innerHTML = '<button class="btn btn-warning" id="btnEdit" data-target="#modalEdit" data-toggle="modal" data-id="'+val['id']+'" data-nama="'+val["nama"]+'" data-jenis_kelamin="'+val['jenis_kelamin']+'" data-alamat="'+val['alamat']+'" data-nama_ayah="'+val["nama_ayah"]+'" data-nama_ibu="'+val["nama_ibu"]+'" data-no_hp="'+val["no_hp"]+'"><i class="fa fa-edit"></i> Edit </button> &nbsp;'
                        aksiCell.innerHTML += '<button class="btn btn-danger" onclick="hapusData('+val['id']+')"><i class="fa fa-trash"></i> Hapus</button>'
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        $("body").on('click', '#btnEdit', function() {
            let id = $(this).data('id');
            let nama = $(this).data('nama');
            let jenis_kelamin = $(this).data('jenis_kelamin');
            let alamat = $(this).data('alamat');
            let nama_ayah = $(this).data('nama_ayah');
            let nama_ibu = $(this).data('nama_ibu');
            let no_hp = $(this).data('no_hp');

            $("#id").val(id)
            $("#nm").val(nama)
            $("#jk").val(jenis_kelamin)
            $("#address").val(alamat)
            $("#ayah").val(nama_ayah)
            $("#ibu").val(nama_ibu)
            $("#hp").val(no_hp)
            $("#oldNoHp").val(no_hp)
        });

        $("#btn-tambah").on('click', function() {
            let nama = $("#nama").val().trim();
            let jenis_kelamin = $("#jenis_kelamin").val().trim();
            let alamat = $("#alamat").val().trim();
            let nama_ayah = $("#nama_ayah").val().trim();
            let nama_ibu = $("#nama_ibu").val().trim();
            let no_hp = $("#no_hp").val().trim();

            if (nama == "", jenis_kelamin == "", alamat == "", nama_ayah == "", nama_ibu == "", no_hp == "") {
                Swal.fire({
                    title : "Oops",
                    text : "Data Tidak Boleh Kosong",
                    icon : "error"
                })
            } else {
                $.ajax({
                    url : "{{ url('/api/siswa') }}",
                    type : "POST",
                    data : { nama : nama, jenis_kelamin : jenis_kelamin, alamat : alamat, nama_ayah : nama_ayah, nama_ibu : nama_ibu, no_hp : no_hp, _token: "{{ csrf_token() }}" },
                    success : function(response) {
                        if (response.status == true) {
                            $("#nama").val('');
                            $("#jenis_kelamin").val('');
                            $("#alamat").val('');
                            $("#nama_ayah").val('');
                            $("#nama_ibu").val('');
                            $("#no_hp").val('');
                            tampilData()
                            $("#modalTambah").modal('hide')
                            Swal.fire({
                                title : "Berhasil",
                                text : "Berhasil di Tambahkan",
                                icon : "success"
                            })
                        } else {
                            Swal.fire({
                                title : "Oops",
                                text : "Data Gagal di Inputkan",
                                icon : "error"
                            })
                        }
                    }
                })
            }
        })

        $("#btn-edit").on('click', function() {
            let id = $("#id").val().trim();
            let nama = $("#nm").val().trim();
            let jenis_kelamin = $("#jk").val().trim();
            let alamat = $("#address").val().trim();
            let nama_ayah = $("#ayah").val().trim();
            let nama_ibu = $("#ibu").val().trim();
            let no_hp = $("#hp").val().trim();
            let oldNoHp = $("#oldNoHp").val().trim();

            if (nama == "", jenis_kelamin == "", alamat == "", nama_ayah == "", nama_ibu == "", no_hp == "") {
                Swal.fire({
                    title : "Oops",
                    text : "Data tidak boleh kosong",
                    icon : "error"
                })
            } else {
                $.ajax({
                    url : "{{ url('/api/siswa/') }}/" + id,
                    type : "POST",
                    data : { id : id, nama : nama, jenis_kelamin : jenis_kelamin, alamat : alamat, nama_ayah : nama_ayah, nama_ibu : nama_ibu, no_hp : no_hp, oldNoHp : oldNoHp , _token: "{{ csrf_token() }}", _method : "PUT" },
                    success : function(response) {
                        console.log(response)
                        if (response.status == true) {
                            $("#id").val('')
                            $("#nm").val('')
                            $("#jk").val()
                            $("#address").val()
                            $("#ayah").val()
                            $("#ibu").val()
                            $("#hp").val()
                            $("#oldNoHp").val()
                            tampilData()
                            $("#modalEdit").modal('hide')
                            Swal.fire({
                                title : "Berhasil",
                                text : "Berhasil di Simpan",
                                icon : "success"
                            })
                        } else {
                            Swal.fire({
                                title : "Oops",
                                text : "Data Gagal di Simpan",
                                icon : "error"
                            })
                        }
                    }
                })
            }
        })
    })

    function hapusData(id)
    {
        Swal.fire({
            title : "Apakah Yakin ?",
            text : "Untuk Menghapus Data Ini",
            icon : "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : "{{ url('/api/siswa/') }}/" + id,
                    type : "POST",
                    data : { _token: "{{ csrf_token() }}", _method : "DELETE" },
                    success : function(response) {
                        console.log(response)
                        if (response.status == true) {
                            tampilData()
                            Swal.fire(
                            'Berhasil!',
                            'Data Berhasil di Hapus',
                            'success'
                            )
                        } else {
                            Swal.fire(
                            'Gagal!',
                            'Data Gagal di Hapus',
                            'error'
                            )
                        }
                    }
                })
            } else {

            }
        })
    }


    tampilData();
</script>

@endsection
