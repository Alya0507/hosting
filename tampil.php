<?php
echo "<style>
    .komentar-box {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        font-family: Arial, sans-serif;
    }
</style>";

if (file_exists("komentar.txt")) {
    $data = file("komentar.txt", FILE_IGNORE_NEW_LINES);
    foreach ($data as $baris) {
        echo "<div class='komentar-box'>" . htmlspecialchars($baris) . "</div>";
    }
} else {
    echo "<p>Belum ada komentar.</p>";
}
?>
