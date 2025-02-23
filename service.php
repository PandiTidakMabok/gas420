<?php
// Tentukan halaman saat ini
$current_page = 'services'; // Ubah sesuai dengan halaman yang aktif
?>

<html lang="en">
<head>
    <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/de110d72-f75c-43fd-a5fd-a25fab2a1ce6/d19ao82-381efabe-8d63-4913-938c-9468955acf9e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RlMTEwZDcyLWY3NWMtNDNmZC1hNWZkLWEyNWZhYjJhMWNlNlwvZDE5YW84Mi0zODFlZmFiZS04ZDYzLTQ5MTMtOTM4Yy05NDY4OTU1YWNmOWUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.61exMlGSGDelbE-WUMSeceX76Ddf864wf3GzaiyM3xw" type="image/x-icon">
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Proudk dan Jasa Mr Talka Engineering</title>
    <link rel="stylesheet" href="css/service.css"> <!-- Menghubungkan file CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"></head>
<body>
    <?php include "layout/header.html"; ?>

    <main>
        <section class="hero-section">
            <h1 class="hero-title">Produk & Jasa Kami</h1>
        </section>


        <section class="container-jasa">
            <div class="section-title">
                <h2>Jasa Kami</h2>
            </div>
            <div class="grid-container">
                <div class="grid-item" style="background-image: url('img/turun.png');">
                    <h2>Turun Mesin</h2>
                </div>
                <div class="grid-item" style="background-image: url('img/tune.png');">
                    <h2>Tune Up/Servis Ringan</h2>
                </div>
                <div class="grid-item" style="background-image: url('img/rangka.png');">
                    <h2>Custom Body</h2>
                </div>
            </div>
        </section>
    </main>

    <?php include "layout/footer.html"; ?>

    <!-- Tautkan file JavaScript di sini -->
<script src="js/darkmode.js"></script> <!-- Sesuaikan path jika perlu -->
    
</body>
</html>