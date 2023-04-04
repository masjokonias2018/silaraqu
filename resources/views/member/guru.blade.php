@extends('admin.app')
@section('style')
<link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/toastr/toastr.min.css')}}">
@stop
@section('judul', 'Data Guru')
@section('guru', 'active')
@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Guru SMP Negeri 2 Blangjerango</h3>        
        <h3 data-toggle="modal" type="button" class="card-title float-right" data-target="#modal-tambah">
          <i class="fas fa-plus"></i>
        </h3>
      </div>
      <div class="card-body"> 
        <div class="col-sm-12">
          <table id="tabelguru" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>L/P</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Mapel</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($guru->count() > 0)
                @foreach($guru as $no => $guru)
                <tr>
                  <th>{{ $no+1 }}</th>  
                  <td>{{$guru->name}}</td>
                  <td>{{$guru->jenis_kelamin}}</td>
                  <td>{{$guru->tempat_lahir}}</td>
                  <td>{{$guru->tanggal_lahir}}</td>
                  <td>{{$guru->agama}}</td>
                  <td>{{$guru->alamat}}</td>
                  <td>
                    <a href="/guru/{{$guru->id}}/profile" type="button">
                      <span class="badge bg-info"><i class="nav-icon fas fa-eye"></i></span>
                    </a>
                    <span 
                      type="button" 
                      class="badge bg-warning"
                      data-toggle="modal" 
                      data-nm="{{ $guru->name }}" 
                      data-jk="{{ $guru->jenis_kelamin }}"
                      data-tl="{{ $guru->tempat_lahir }}"
                      data-tgl="{{ $guru->tanggal_lahir }}"
                      data-ag="{{ $guru->agama }}"
                      data-al="{{ $guru->alamat }}"
                      data-sis_id="{{ $guru->id }}"
                      data-target="#modal-edit">Edit
                    </span>
                    <a href="#" type="button" >
                      <span guru-id="{{$guru->id}}" guru-nama="{{$guru->name}}" class="badge bg-danger delete">Hapus</span>
                    </a>

                  </td>  
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="10" align="center">Tidak ada data</td>
                </tr>
                @endif
              </tbody>
          </table>    
        </div>
      </div>
    </div>
    @include('_templates.modals.modal_tambahguru')
@stop

@section('script')
<script>
  $('#modal-edit').on('show.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var nama = button.data('nm')
    var gender = button.data('jk')
    var temla = button.data('tl')
    var tanla = button.data('tgl')
    var agm = button.data('ag')
    var almt = button.data('al')
    var sis_id = button.data('sis_id')

    var modal = $(this)
    modal.find('.card-body #name').val(nama);
    modal.find('.card-body #jenis_kelamin').val(gender);
    modal.find('.card-body #tempat_lahir').val(temla);
    modal.find('.card-body #tanggal_lahir').val(tanla);
    modal.find('.card-body #agama').val(agm);
    modal.find('.card-body #alamat').val(almt);
    modal.find('.card-body #sis_id').val(sis_id);
  })
</script>
<script src="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
  $('.delete').click(function(){
    var guru_id=$(this).attr('guru-id');
    var guru_nm=$(this).attr('guru-nama');
      const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Anda akan menghapus "+guru_nm+ "?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya Hapus!',
          cancelButtonText: 'Tidak',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/guru/delete/"+guru_id+""
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Batal',
              'Data guru ini masih aman :)',
              'warning'
            )
          }
        })
  })
</script>
<script src="{{asset('adminlte/plugins/toastr/toastr.min.js')}}"></script>  
<script>
  @if(Session::has('suksestambah'))
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    $(function() {
      Toast.fire({
        icon: 'success',
        title: '{{Session::get('suksestambah')}}'
      })
    });
  });
  @endif

  @if(Session::has('suksesedit'))
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    $(function() {
      Toast.fire({
        icon: 'success',
        title: '{{Session::get('suksesedit')}}'
      })
    });
  });
  @endif

  @if(Session::has('sukseshapus'))
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    $(function() {
      Toast.fire({
        icon: 'success',
        title: '{{Session::get('sukseshapus')}}'
      })
    });
  });
  @endif
</script>
<script>
  @if ($errors->has('name')||$errors->has('jenis_kelamin')||$errors->has('agama')||$errors->has('tempat_lahir')||$errors->has('tanggal_lahir')||$errors->has('alamat'))
      $('#modal-tambah').modal('show');
   @endif
  </script>
@stop