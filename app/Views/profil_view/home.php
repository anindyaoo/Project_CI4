<!DOCTYPE html>
<html>

<head>
    <title>Membuat CV</title>
    <link rel="stylesheet" href="<?= base_url('css/home.css') ?>">
</head>

<body>
    <div class="profil-container">
        <img src="gambar/fotoprofil.jpeg" alt="Foto Profil Anindya" class="profil-img">
        <h1>Anindya Admawati</h1>
        <p>
            Hai namaku Anindya Admawati biasa dipanggil nindy atau anin, Hobiku
            memasak, Cita-citaku menjadi konsultan IT, Inspirasi web yang ingin saya
            ciptakan adalah web yang berisi tentang resep masakan.
        </p>

        <!-- Tentang Saya -->
        <section class="tentangSy">
            <h2 class="judul-section">Tentang Saya</h2>

            <div class="tentang-container">
                <div class="motivasi">
                    <h2>Motivasi</h2>
                    <p>
                        💡 "Belajar programming bukan soal jadi ahli dalam semalam, tapi soal melatih logika,
                        membiasakan
                        diri
                        berpikir
                        sistematis, dan membangun sesuatu dari nol. Setiap baris kode yang kamu tulis adalah satu
                        langkah
                        lebih
                        dekat
                        menuju impianmu. Gagal? Ulangi. Eror? Pelajari. Karena dari trial dan error, lahirlah programmer
                        hebat."
                    </p>
                </div>

                <div class="skill">
                    <h2>Skill</h2>
                    <div class="skill-item">📸 Fotografi</div>
                    <div class="skill-item">🖌️ Editing</div>
                    <div class="skill-item">👩‍🍳 Cooking</div>
                </div>
            </div>
        </section>

        <!-- matkul -->
        <section class="matkul">
            <h2>Mata Kuliah</h2>
            <div class="matkulkontainer">
                <?php foreach ($courses as $course): ?>
                    <div class="matkulcard" onclick="location.href='<?= site_url('matkul/' . $course['id']) ?>'">
                        <img src="<?= base_url('gambar/' . $course['gambar']) ?>" alt="">
                        <h3><?= esc($course['nama_mk']) ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="contact" id="kontak">
            <h2 class="contact-title">Hubungi Saya</h2>
            <p class="contact-subtitle">Ada pertanyaan? Kirim pesan melalui form di bawah ini</p>

            <form id="wa-form">
                <input type="text" id="name" placeholder="Siapa Namamu" required>
                <input type="email" id="email" placeholder="Apa Email Kamu" required>

                <select id="reason" required>
                    <option value="">-- Pilih Alasan Menghubungi --</option>
                    <option value="Konsultasi">Konsultasi</option>
                    <option value="Saran atau Kritik">Saran atau Kritik</option>
                    <option value="Lainnya">Lainnya</option>
                </select>

                <textarea id="message" placeholder="Tulis pesanmu..." rows="4" required></textarea>
                <button type="submit">Kirim ke WhatsApp</button>
            </form>
        </section>




        <footer>
            <p> Copyright 2025 Anindya Admawati. All rights reserved.</p>
        </footer>
</body>

<script>
    document.getElementById("wa-form").addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const reason = document.getElementById("reason").value;
        const message = document.getElementById("message").value;

        const phoneNumber = "6285785169861";

        const whatsappMessage = `Halo, saya ${name} (${email}) ingin menghubungi Anda.\n\nAlasan: ${reason}\n\nPesan:\n${message}`;

        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

        window.open(whatsappURL, "_blank");
    });
</script>


</html>