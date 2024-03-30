<?php

include_once "flight.php";

if (isset($_REQUEST["btSearch"])) {
    $tenKH = $_REQUEST["search"];
    //lay danh sach tat ca cac khoa hoc muon tim theo ten nhap trong o 'search', luu vo mang ds
    $ds = FlightDAO::get(name: $tenKH);
} else {
    //lay danh sach tat ca cac khoa hoc, luu vo mang ds
    $ds = FlightDAO::get();
}

if ($ds == null) {
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flight-control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>List of Flights</h2>
        <hr>
        <p><a href="addFlight.php">Add New Flight</a></p>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>from</th>
                    <th>to</th>
                    <th>depature time</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($ds as $item) {
                ?>
                    <tr>
                        <td> <?= $item->id ?> </td>
                        <td> <?= $item->source ?></td>
                        <td> <?= $item->destination ?></td>
                        <td><?= $item->deptime ?> </td>
                        <td>
                            <a href="#?<?= $item->id ?>">detail</a> |
                            <a href="#?<?= $item->id ?>">edit</a> |
                            <a href='flight_delete.php?id=<?= $item->id ?>'  onclick='return confirm("Are u sure ?");'> Delete </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    
</body>

</html>