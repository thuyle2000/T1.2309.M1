<?php

if (isset($_REQUEST["btnOK"])) {

    include_once "flight.php";

    //trang da duoc submit,lay du lieu submit luu vo DB
    $id = $_REQUEST["code"];
    $ftype = $_REQUEST["ftype"];
    $source = $_REQUEST["source"];
    $destination = $_REQUEST["destination"];
    $deptime = $_REQUEST["deptime"];
    $hours = $_REQUEST["hours"];

    $chuyenBay = new Flight(id: $id, ftype: $ftype, source: $source, destination: $destination, deptime: $deptime, hours: $hours);

    $kq = FlightDAO::insert($chuyenBay);
    if ($kq) {
        //quay ve trang danh sach cac lop hoc
        header("location:FlightControl.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new-flight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Add New Flight</h3>
        <hr>
        <div class="col-md-4 p-4" style="background-color: antiquewhite;">
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="code" class="form-label">code</label>
                    <input type="text" name="code" id="code" value="A05" required class="form-control " />
                </div>

                
                <div class="mb-3">
                    <label for="ftype" class="form-label">Flight Type</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Boeing" id="ftype1" name="ftype">
                        <label class="form-check-label" for="ftype1">
                            Boeing
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Airbus" id="ftype2" name="ftype" checked>
                        <label class="form-check-label" for="ftype2">
                            Airbus
                        </label>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="deptime" class="form-label">Depature Time</label>
                    <input type="time" name="deptime" id="deptime" value="08:00" required class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="hours" class="form-label">Hours</label>
                    <input type="number" name="hours" id="hours" value="2" min="1" max="20" required class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="source" class="form-label">Source</label>
                    <select class="form-select form-select-sm" name="source" id="source">
                        <option selected>Saigon</option>
                        <option>Hanoi</option>
                        <option>Hue</option>
                        <option>Danang</option>
                        <option>Cantho</option>
                        <option>Hongkong</option>
                    </select>
                </div>



                <div class="mb-3">
                    <label for="destination" class="label-control">Destination</label>
                    <select class="form-select form-select-sm" name="destination" id="destination">
                        <option>Saigon</option>
                        <option selected>Hanoi</option>
                        <option>Hue</option>
                        <option>Danang</option>
                        <option>Cantho</option>
                        <option>Hongkong</option>
                    </select>
                </div>



                <div>
                    <button type="submit" name="btnOK" class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>