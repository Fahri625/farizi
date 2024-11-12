<?php include 'header.php'; ?>

<section class="my-5">
    <div class="container">
        <h1 class="text-center mb-4">Hubungi Farizi</h1>
        <p class="text-center lead">Farizi siap membantu Anda. Silakan isi formulir di bawah ini atau hubungi Farizi melalui informasi yang tersedia.</p>
        
        <div class="row mt-5">
         
            <div class="col-md-6">
                <h3>Formulir Kontak</h3>
                <form action="contact.php" method="POST" class="mt-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
 
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <ul class="list-unstyled mt-4">
                    <li><strong>Alamat:</strong> Jl. Seuturan No. III, Yogyakarta, Indonesia</li>
                    <li><strong>Email:</strong> mfahrialf10@students.amikom.ac.id</li>
                    <li><strong>Telepon:</strong> +62 822 8612 5146</li>
                </ul>
      
                <h3 class="mt-4">Lokasi Farizi</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1947005029015!2d110.4073879747658!3d-7.769167292250211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5993dcd3a59f%3A0xb4f5bab3a939f52b!2sJl.%20Seturan%20Raya%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055281%2C%20Indonesia!5e0!3m2!1sen!2sau!4v1731409366189!5m2!1sen!2sau" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
          
                <h3 class="mt-4">Ikuti Farizi</h3>
                <div class="d-flex">
                    <a href="#" class="btn btn-primary btn-sm me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-info btn-sm me-2"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
