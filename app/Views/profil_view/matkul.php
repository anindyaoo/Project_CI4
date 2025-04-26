<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= esc($matkul['nama_mk']) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/matkul.css') ?>">
</head>

<body>
    <h1><?= esc($matkul['nama_mk']) ?></h1>
    <p><?= esc($matkul['deskripsi']) ?></p>
    <table border="1">
        <tr>
            <th>Jam</th>
            <th>Dosen</th>
            <th>Link ke Google Clasroom</th>
            <th>Link ke Grub Whatsapp</th>
        </tr>
        <tr>
            <td><?= esc($matkul['jam']) ?></td>
            <td><?= esc($matkul['dosen']) ?></td>
            <td>
                <a href=<?= esc($matkul['link_gc']) ?> target="_blank">Join</a>
            </td>
            <td>
                <a href=<?= esc($matkul['link_wa']) ?> target="_blank">Join</a>
            </td>
        </tr>
    </table>

    <br>
    <button onclick="history.back()" style="
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #0077b6;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
">
        ⬅️ Kembali
    </button>

</body>

</html>