@extends('layouts.account')
@extends('layouts.loader')

@section('title')
Data Karyawan | MIS
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>DATA KARYAWAN</h1>
    </div>

    <div class="section-body">
      <!--================== FILTER ==================-->
      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-filter"></i> FILTER</h4>
        </div>

        <div class="card-body">
          <form action="{{ route('account.pengguna.search') }}" method="GET" id="searchForm">
            <div class="form-group position-relative">
              <div class="input-group">
                <!-- Input Pencarian -->
                <input type="text" class="form-control rounded-pill" name="q" placeholder="PENCARIAN"
                  value="{{ app('request')->input('q') }}"
                  style="height: 45px; padding-right: 110px; border-right: 0;">

                <!-- Tombol di dalam Input -->
                <div class="position-absolute d-flex align-items-center"
                  style="right: 10px; height: 45px; z-index: 10; border-radius: 40px; padding-left: 5px;">

                  <button type="submit" class="btn btn-info rounded-pill"
                    style="height: 40px; display: flex; align-items: center;">
                    <i class="fa fa-search"></i>
                  </button>

                  @if(request()->has('q'))
                  <a href="{{ route('account.pengguna.index') }}" class="btn btn-danger rounded-pill ml-1"
                    style="height: 40px; display: flex; align-items: center;">
                    <i class="fa fa-trash"></i>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </form>

          <div class="row">
            <div class="col-12 mt-3">
              <div class="form-group text-center">
                <div class="input-group mb-3">
                  <a href="{{ route('account.pengguna.create') }}" class="btn btn-primary btn-block rounded-pill" style="padding-top: 10px;">
                    <i class="fa fa-plus-circle"></i> TAMBAH DATA KARYAWAN
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--================== END ==================-->

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-list"></i> DATA KARYAWAN</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;width: 6%" rowspan="2">NO.</th>
                  <!-- <th scope="col" rowspan="2" style="text-align: center;">NAMA</th> -->
                  <th scope="col" rowspan="2" style="text-align: center;">EMAIL</th>
                  <th scope="col" rowspan="2" style="text-align: center;">USERNAME</th>
                  <th scope="col" rowspan="2" style="text-align: center;">VERIFIKASI EMAIL</th>
                  <!--<th scope="col" rowspan="2" style="text-align: center;">TANGGAL DI BUAT</th>-->
                  <th scope="col" rowspan="2" style="text-align: center;">JENIS</th>
                  <th scope="col" rowspan="2" style="text-align: center;">LEVEL</th>
                  <th scope="col" rowspan="2" style="text-align: center;">STATUS</th>
                  <th scope="col" style="width: 10%;text-align: center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($users as $item)
                <tr>
                  <th scope="row" style="text-align: center">{{ $no }}</th>
                  <!-- <td style="text-align: center;">{{ $item->full_name }}</td> -->
                  <td style="text-align: center;">{{ $item->email }}</td>
                  <td style="text-align: center;">{{ $item->username }}</td>
                  <td style="text-align: center;">
                    @if ($item->email_verified_at)
                    <button class="btn btn-success" disabled>Sudah Diverifikasi</button>
                    @else
                    <button class="btn btn-danger" disabled>Belum Diverifikasi</button>
                    @endif
                  </td>
                  <!--<td style="text-align: center;">
                    @if ($item->avatar)
                    <img src="{{ asset('assets/img/avatar/' . $item->avatar) }}" alt="Avatar" width="50">
                    @else
                    No Avatar
                    @endif
                  </td>-->
                  <!--<td style="text-align: center;">{{ date('d-m-Y H:i', strtotime($item->created_at)) }}</td>-->
                  <td style="text-align: center;">{{ $item->jenis }}</td>
                  <td style="text-align: center;">{{ $item->level }}</td>
                  <td style="text-align: center;">
                    @if ($item->status == 'active')
                    <button class="btn btn-success" disabled>ACTIVE</button>
                    @else
                    <button class="btn btn-danger" disabled>NON ACTIVE</button>
                    @endif
                  </td>
                  <td class="text-center">
                    <a style="margin-right: 5px; margin-bottom:5px;" href="{{ route('account.pengguna.edit', $item->id) }}" class="btn btn-sm btn-warning mt-2">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <!-- <a style="margin-right: 5px; margin-bottom:5px;" href="{{ route('account.pengguna.detail', $item->id) }}" class="btn btn-sm btn-info mt-2">
                      <i class="fa fa-eye"></i>
                    </a> -->
                    <button style="margin-right: 5px; margin-bottom:5px;" onclick="Delete('{{ $item->id }}')" class="btn btn-sm btn-danger mt-2 mb-2">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
            <div style="text-align: center;">
              <style>
                @media (max-width: 767px) {
                  .pagination {
                    margin-left: 480px;
                    /* Adjust the margin value as needed for mobile devices */
                  }
                }

                @media (min-width: 768px) and (max-width: 991px) {
                  .pagination {
                    margin-left: 300px;
                    /* Adjust the margin value as needed for iPads */
                  }
                }
              </style>
              {{$users->links("vendor.pagination.bootstrap-4")}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!--================== RELOAD DATA KETIKA SUKSES ==================-->
<script>
  @if(Session::has('success'))
  // Menggunakan setTimeout untuk menunggu pesan sukses muncul sebelum melakukan refresh
  setTimeout(function() {
    window.location.reload();
  }, 1000); // Refresh halaman setelah 2 detik
  @endif
</script>
<!--================== END ==================-->

<!--==================  SWEET ALERT DELETET  ==================-->
<script>
  function Delete(id) {
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
      title: "APAKAH KAMU YAKIN ?",
      text: "INGIN MENGHAPUS DATA INI!",
      icon: "warning",
      buttons: ['TIDAK', 'YA'],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        // Ajax delete
        $.ajax({
          url: "{{ route('account.pengguna.destroy', '') }}/" + id,
          data: {
            "_token": token,
            "_method": "DELETE"
          },
          type: 'POST',
          success: function(response) {
            swal({
              title: 'BERHASIL!',
              text: 'DATA BERHASIL DIHAPUS!',
              icon: 'success',
              timer: 1000,
              showConfirmButton: false,
              showCancelButton: false,
              buttons: false,
            }).then(function() {
              location.reload();
            });
          }
        });
      } else {
        return true;
      }
    });
  }
</script>
<!--================== END ==================-->

<!--================== SWEET ALERT JIKA FIELDS KOSONG ==================-->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("searchButton").addEventListener("click", function() {
      var searchInputValue = document.querySelector("input[name='q']").value.trim();

      if (searchInputValue === "") {
        Swal.fire({
          icon: 'warning',
          title: 'Peringatan',
          text: 'Harap isi field pencarian terlebih dahulu!',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'OK'
        });
      } else {
        // If not empty, submit the form
        document.getElementById("searchForm").submit();
      }
    });
  });
</script>
<!--================== END ==================-->

@stop