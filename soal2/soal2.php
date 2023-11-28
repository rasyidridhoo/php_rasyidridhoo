<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soal 2</title>
</head>
<body>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : '';
    
    $step = isset($_GET['step']) ? $_GET['step'] : 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($step == 1 && isset($_POST['nama'])) {
            $nama = $_POST['nama'];
            $step = 2;
        } elseif ($step == 2 && isset($_POST['umur'])) {
            $umur = $_POST['umur'];
            $step = 3;
        } elseif ($step == 3 && isset($_POST['hobi'])) {
            $hobi = $_POST['hobi'];
            $step = 4;
        }
    }
    ?>

    <?php if ($step == 1) { ?>
        <form method="post" action="?step=2">
            <tr>
                <td><label for="nama">Nama Anda</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required><br><br></td>
            </tr>
            <input type="submit" value="Submit">
        </form>
    <?php } elseif ($step == 2) { ?>
        <form method="post" action="?step=3">
            <tr>
                <td><label for="umur">Umur Anda</label></td>
                <td>:</td>
                <td><input type="text" id="umur" name="umur" value="<?php echo $umur; ?>" required><br><br></td>
            </tr>
            <input type="submit" value="Submit">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
        </form>
    <?php } elseif ($step == 3) { ?>
        <form method="post" action="?step=4">
            <tr>
                <td><label for="hobi">Hobi Anda</label></td>
                <td>:</td>
                <td><input type="text" id="hobi" name="hobi" value="<?php echo $hobi; ?>" required><br><br></td>
            </tr>
            <input type="submit" value="Submit">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="umur" value="<?php echo $umur; ?>">
        </form>
    <?php } elseif ($step == 4) { ?>
        <div>
            <p>Nama: <?php echo $nama; ?></p>
            <p>Umur: <?php echo $umur; ?></p>
            <p>Hobi: <?php echo $hobi; ?></p>
        </div>
    <?php } ?>
</body>
</html>
