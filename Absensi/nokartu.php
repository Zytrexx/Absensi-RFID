<?php  
    include "koneksi.php";

    $nokartu = '';

    // Periksa keberadaan tabel sebelum menjalankan query
    $checkTable = mysqli_query($konek, "SHOW TABLES LIKE 'tmprfid'");
    if (mysqli_num_rows($checkTable) > 0) {
        // Jika tabel ada, jalankan query untuk mengambil data
        $sql = mysqli_query($konek, "SELECT nokartu FROM tmprfid LIMIT 1");

        if ($sql && mysqli_num_rows($sql) > 0) {
            $data = mysqli_fetch_array($sql);
            $nokartu = isset($data['nokartu']) ? $data['nokartu'] : '';
        }
    } else {
        // Tabel tidak ada, tampilkan pesan atau log error
        echo "Tabel 'tmprfid' tidak ditemukan di database.";
    }
?>

<div class="form-group">
    <label>No.Kartu</label>
    <input type="text" name="nokartu" id="nokartu" placeholder="Tempelkan kartu RFID Anda" class="form-control" style="width: 200px" value="<?php echo htmlspecialchars($nokartu); ?>">
</div>