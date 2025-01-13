<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keindahan Alam Indonesia</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4">Keindahan Alam Indonesia</h2>

    <!-- Add Item Modal -->
    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemModalLabel">Tambah Lokasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addItemForm">
                        <div class="mb-3">
                            <label for="locationName" class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" id="locationName" required>
                        </div>
                        <div class="mb-3">
                            <label for="locationDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="locationDescription" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table and Add Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addItemModal">Tambah Lokasi</button>
    </div>
    <table id="crudTable" class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama Lokasi</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Raja Ampat</td>
            <td>Destinasi wisata alam yang terkenal dengan keindahan alam bawah laut dan pemandangan pulau-pulau kecil yang eksotis.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bromo</td>
            <td>Gunung Bromo terkenal dengan pemandangan matahari terbit yang menakjubkan dan lanskap yang unik.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Danau Toba</td>
            <td>Danau vulkanik terbesar di Indonesia dengan pemandangan yang memukau dan budaya Batak yang kaya.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        const table = $('#crudTable').DataTable();

        // Add item
        $('#addItemForm').on('submit', function (e) {
            e.preventDefault();
            const name = $('#locationName').val();
            const description = $('#locationDescription').val();

            const newRow = table.row.add([
                table.rows().count() + 1,
                name,
                description,
                `<button class="btn btn-warning btn-sm edit">Edit</button>
                 <button class="btn btn-danger btn-sm delete">Hapus</button>`
            ]).draw().node();

            // Close modal and reset form
            $('#addItemModal').modal('hide');
            $('#addItemForm')[0].reset();
        });

        // Delete item
        $('#crudTable tbody').on('click', '.delete', function () {
            table.row($(this).parents('tr')).remove().draw();
        });

        // Edit item
        $('#crudTable tbody').on('click', '.edit', function () {
            const row = table.row($(this).parents('tr'));
            const data = row.data();

            const newName = prompt("Edit Nama Lokasi", data[1]);
            const newDescription = prompt("Edit Deskripsi", data[2]);

            if (newName && newDescrip
