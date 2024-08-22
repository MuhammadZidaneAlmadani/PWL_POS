<!DOCTYPE html>
<html>
    <head>
        <title>Data Stok</title>
    </head>
    <body>
        <h1>Data Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>Barang_Id</th>
                <th>Kategori_Id</th>
                <th>Barang_kode</th>
                <th>Barang_nama</th>
                <th>harga_beli</th>
                <th>harga_jual</th>

            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->barang_id }}</td>
                <td>{{ $d->kategori_id }}</td>
                <td>{{ $d->barang_kode }}</td>
                <td>{{ $d->barang_nama }}</td>
                <td>{{ $d->harga_beli }}</td>
                <td>{{ $d->harga_jual }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>