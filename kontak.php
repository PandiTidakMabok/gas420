<?php
// Tentukan halaman saat ini
$current_page = 'contact'; // Ubah sesuai dengan halaman yang aktif
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/de110d72-f75c-43fd-a5fd-a25fab2a1ce6/d19ao82-381efabe-8d63-4913-938c-9468955acf9e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RlMTEwZDcyLWY3NWMtNDNmZC1hNWZkLWEyNWZhYjJhMWNlNlwvZDE5YW84Mi0zODFlZmFiZS04ZDYzLTQ5MTMtOTM4Yy05NDY4OTU1YWNmOWUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.61exMlGSGDelbE-WUMSeceX76Ddf864wf3GzaiyM3xw" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"></head>
    <title>Contact Mr Talka Engineering</title>
</head>
<body>

<?php include "layout/header.html" ?>

<section class="hero">
        <h1>Kontak Kami</h1>
        <p>Mr Talka Engineering memberikan solusi ketika anda tidak puas dengan performa maupun tampilan sepeda motor anda</p>
    </section>

    <div class="container">
        <p>Untuk pemesanan dan informasi lebih lanjut, Anda dapat menghubungi kami melalui:</p>
        
        <div class="contact-info">
    <div class="contact-item">
        <a href="https://wa.me/6285755455093" target="_blank" aria-label="Hubungi kami di WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="contact-item">
        <a href="https://www.tiktok.com/@pamantalka" target="_blank" aria-label="Ikuti kami di TikTok">
            <i class="fab fa-tiktok"></i>
        </a>
    </div>
    <div class="contact-item">
        <a href="https://www.instagram.com/sapu_kelas" target="_blank" aria-label="Ikuti kami di Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

    </div>

    <?php include "layout/footer.html"; ?>

<!-- Tautkan file JavaScript di sini -->
<script src="js/darkmode.js"></script> <!-- Sesuaikan path jika perlu -->

</body>
</html>