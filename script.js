function validasiForm() {
    const nama = document.getElementById("nama").value.trim();
    const komentar = document.getElementById("komentar").value.trim();

    if (nama === "" || komentar === "") {
        alert("Nama dan komentar tidak boleh kosong.");
        return false;
    }
    return true;
}
