<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <form>
                        <h1 class="text-center mb-4">Hubungi Kami</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Add Google Maps or contact info section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <h3>Alamat</h3>
            <p>Bekasi, Indonesia</p>
        </div>
        <div class="col-md-4">
            <h3>Telepon</h3>
            <p>+62 821-2573-3076</p>
        </div>
        <div class="col-md-4">
            <h3>Email</h3>
            <p>lintangrafi870@gmail.com</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* Set background image for the contact page */
    body {
        background-image: url('https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/danau-toba-2.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
    }

    /* Center align the form in the middle of the page */
    .container {
        position: relative;
        z-index: 1;
        margin-top: 50px;
    }

    .card {
        background-color: rgba(0, 0, 0, 0.7); /* Dark background for the form */
        color: #fff;
        border-radius: 10px;
    }

    .card-body {
        padding: 30px;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .form-label {
        font-size: 1.2rem;
    }

    .form-control {
        font-size: 1rem;
        padding: 12px;
        border-radius: 10px;
    }

    .btn-primary {
        background-color: rgb(10, 255, 116);
        border: none;
        padding: 12px;
        font-size: 1.1rem;
        border-radius: 10px;
    }

    .btn-primary:hover {
        background-color: rgb(0, 203, 41);
    }

    /* Info section */
    .container.my-5 {
        background: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 10px;
    }

    .container.my-5 h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .container.my-5 p {
        font-size: 1rem;
        line-height: 1.5;
    }
</style>
