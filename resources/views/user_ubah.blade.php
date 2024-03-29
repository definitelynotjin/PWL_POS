><html>
    <head>
        <title>Level Pengguna</title>
    </heaad>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="{{ route('/user') }}">Kembali</a>
        <br>
        <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id)  }}">
            {{ csrf_field()}}
            {{ method_field('PUT')}}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>

        <label>Nama</label>
        <input type="text"  name="nama"  placeholder="Masukkan Nama">
        <br>

        <label>Password</label>
        <input type="password"  name="password" placeholder="Masukkan Password">
        <br>

        <label>Level ID </label>
        <input type="number" name="level_id">
        <br>

        <input type="submit" name="btn btn-success"  value="Simpan">
        </form>
    </body>

</html>
