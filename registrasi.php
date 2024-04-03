<body>
    <center>
        <h1>REGISTRASI</h1>
        <form action="lihat.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="namaDepan">Nama Depan</label>
                    </td>
                    <td>
                        <input type="text" name="namaDepan" id="namaDepan">
                    </td>
                    <td>
                        <label for="namaBelakang">Nama Belakang</label>
                    </td>
                    <td>
                        <input type="text" name="namaBelakang" id="namaBelakang">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ttl">Tempat, Tanggal Lahir</label>
                    </td>
                    <td>
                        <input type="text" name="ttl" id="ttl">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Pria">Jenis Kelamin</label>
                    </td>
                    <td>
                        <input type="radio" name="jenisKelamin" id="Pria" value="Pria">
                        <label for="Pria">Pria</label>
                    </td>
                    <td>
                        <input type="radio" name="jenisKelamin" id="Wanita" value="Wanita">
                        <label for="Wanita">Wanita</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="agama">Agama</label>
                    </td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="30"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Daftar</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>