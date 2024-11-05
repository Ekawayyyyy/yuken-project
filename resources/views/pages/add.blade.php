<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Keuangan</title>
    <!-- Tambahkan link CSS untuk styling Bootstrap atau custom CSS jika diperlukan -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Tombol untuk memunculkan modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataModal">
            Tambah Data Keuangan
        </button>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDataModalLabel">Data Keuangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('data.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun" required>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan_tahunan">Pendapatan Tahunan</label>
                                <input type="number" class="form-control" id="pendapatan_tahunan" name="pendapatan_tahunan" required>
                            </div>
                            <div class="form-group">
                                <label for="laba_bersih">Laba Bersih</label>
                                <input type="number" class="form-control" id="laba_bersih" name="laba_bersih" required>
                            </div>
                            <div class="form-group">
                                <label for="rasio_utang">Rasio Utang</label>
                                <input type="number" class="form-control" id="rasio_utang" name="rasio_utang" required>
                            </div>
                            <div class="form-group">
                                <label for="tingkat_resiko">Tingkat Resiko</label>
                                <select class="form-control" id="tingkat_resiko" name="tingkat_resiko">
                                    <option>Rendah</option>
                                    <option>Sedang</option>
                                    <option>Tinggi</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS untuk Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
