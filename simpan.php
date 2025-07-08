<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $komentar = trim($_POST["komentar"]);

    if (!empty($nama) && !empty($komentar)) {
        $baris = date("Y-m-d H:i:s") . " - " . $nama . ": " . $komentar . "\n";
        file_put_contents("komentar.txt", $baris, FILE_APPEND);
    }
}
header("Location: index.html");
exit;
?>
