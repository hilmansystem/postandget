<body>
    <h1>New Post</h1>
    <form action="ViewPost.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="penulis">Penulis</label>
                </td>
                <td>
                    <input type="text" name="penulis" id="penulis">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal">Tanggal & Waktu Post</label>
                </td>
                <td>
                    <input type="date" name="tanggal" id="tanggal">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="judul">Judul Berita</label>
                </td>
                <td>
                    <input type="text" name="judul" id="judul">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="isiBerita">Isi Berita</label>
                </td>
                <td>
                    <textarea name="isiBerita" id="isiBerita" cols="100" rows="10" wrap="hard"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Buat Post</button>
                </td>
            </tr>
        </table>
    </form>
</body>