<?php
require_once 'dosen.php';

// Cek apakah idDosen tersedia di URL
if (isset($_GET['idDosen'])) {
    $id = $_GET['idDosen'];

    $dosen = new Dosen();
    $data = $dosen->getDosenById($id);

    if (!$data) {
        die("Data dosen tidak ditemukan.");
    }

    $idDosen = $data["idDosen"];
    $namaDosen = $data["namaDosen"];
    $noHP = $data["noHP"];
} else {
    header("Location: viewdosen.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
                <p>
                    <label for="namaDosen">Nama Dosen: </label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $namaDosen; ?>">
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
