<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_school");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;   
    } 
    return $rows;
}

function tambah($data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $status = htmlspecialchars($data["status"]);

        // query insert data
    $query = "INSERT INTO mahasiswa values 
        ('', '$nim', '$nama', '$prodi', '$status' )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $status = htmlspecialchars($data["status"]);

        // query insert data
    $query = "UPDATE mahasiswa SET 
                nim = '$nim', nama = '$nama', kode_prodi = '$prodi', status_aktivitas = '$status'
                    WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>