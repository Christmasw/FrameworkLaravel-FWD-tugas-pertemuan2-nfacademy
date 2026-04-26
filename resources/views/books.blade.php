<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        body { font-family: Arial; background: #f4f6f9; }
        .container { width: 80%; margin: auto; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background: #28a745; color: white; }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Buku</h2>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>Rp {{ number_format($book->price) }}</td>
            <td>{{ $book->stock }}</td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>