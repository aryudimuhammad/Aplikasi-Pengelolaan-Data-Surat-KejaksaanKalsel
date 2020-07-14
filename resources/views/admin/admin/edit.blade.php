<div class="modal fade bounceInRight animated in" id="modaledit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Data Admin</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form enctype="multipart/form-data" method="post">
                {{ method_field('put') }}
                @csrf
                <div class="modal-body" style="margin-bottom: 130px;">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{old('telp')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">{{old('name')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="password_lama">Password Lama</label>
                        <input type="password" name="password_lama" id="password_lama" class="form-control" placeholder="Masukkan Password Lama">
                        <p>Note : Masukkan Password jika ingin mengubah Password</p>
                    </div>
                    <div class="form-group">
                        <label for="password_baru">Password Baru</label>
                        <input type="password" name="password_baru" id="password_baru" class="form-control" placeholder="Masukkan Password Baru">
                        <p>Note : Masukkan Password jika ingin mengubah Password</p>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi_password">Konfirmasi Password</label>
                        <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" onchange="document.getElementById('gambar').value = this.value;" aria-describedby="gambar" value="{{old('gambar')}}">
                        <p>Note : Masukkan Gambar jika ingin mengubah Gambar</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/nopict.png" alt="Gambar Tidak Ada" id="gambar" style="width: 50%; height:50%; display: block; margin: auto;">
                    </div>
                    <div class="col-md-6">
                        <img src="/images/nopictcreate.png" id="gambar_nodin" alt="Preview Gambar" style="width: 50%; height:50%; display: block; margin: auto;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
