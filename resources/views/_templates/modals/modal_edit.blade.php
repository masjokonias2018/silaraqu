      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              @if ($siswa->count() > 0)
              <h4 class="modal-title text-sm">Edit Data {{$siswa->name}}</h4>
              @else
              <h4 class="modal-title text-sm">Sekolah ini belum ada siswa</h4>
              @endif
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form action="{{route('siswa.edit')}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="card-body">
                  <input type="hidden" name="sis_id" id="sis_id" value="">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name">
                    @if($errors->has('name'))
                    <span class="error invalid-feedback">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control {{$errors->has('jenis_kelamin') ? 'is-invalid' : ''}}" name="jenis_kelamin" id="jenis_kelamin">
                    @if($errors->has('jenis_kelamin'))
                    <span class="error invalid-feedback">{{$errors->first('jenis_kelamin')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control {{$errors->has('agama') ? 'is-invalid' : ''}}" name="agama" id="agama">
                    @if($errors->has('agama'))
                    <span class="error invalid-feedback">{{$errors->first('agama')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control {{$errors->has('tempat_lahir') ? 'is-invalid' : ''}}" name="tempat_lahir" id="tempat_lahir">
                    @if($errors->has('tempat_lahir'))
                    <span class="error invalid-feedback">{{$errors->first('tempat_lahir')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Tanggal harir</label>
                    <input type="date" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid' : ''}}" name="tanggal_lahir" id="tanggal_lahir">
                    @if($errors->has('tanggal_lahir'))
                    <span class="error invalid-feedback">{{$errors->first('tanggal_lahir')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control {{$errors->has('alamat') ? 'is-invalid' : ''}}" name="alamat" id="alamat" >
                    @if($errors->has('alamat'))
                    <span class="error invalid-feedback">{{$errors->first('alamat')}}</span>
                    @endif
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Nanti Saja</button>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </form>
          </div>
        </div>
      </div>