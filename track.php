<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/track.css">
  <title>Courier Details</title>
</head>

<body>
  
  <section class="bgl">
    <?php
    require_once('connecting.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $track_id = $_POST['track_id'];
    }
    ?>
    <div class="cargo">
        <center>
            <h2>Tracking your courier</h2>
        </center>


        <form class="" style="margin:auto;max-width:300px">
            <div class="row">

                <input type="text" class="bg" value="<?php

                                                        $sql = "select * from track where track_id= '$track_id';";
                                                        $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo $row["track_id"];
                                                            }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        ?>">

            </div>
        </form>

        <div class="owner">
            <div class="container l">
                <center>
                    <h3>Sender's details</h3>
                </center>
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="s_name">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php

                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["s_name"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="s_ph_no">Contact</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["s_ph_no"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="s_email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["s_email"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="s_address">Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["s_address"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <br>
            </div>

            <div class="container r">
                <center>
                    <h3>Reciever's details</h3>
                </center>
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="r_name">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["r_name"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="r_ph_no">Contact</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["r_ph_no"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="r_email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["r_email"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="r_address">Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="bg" value="<?php
                                                                    require_once('connecting.php');
                                                                    $sql = "select * from track where track_id= '$track_id';";
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            echo $row["r_address"];
                                                                        }
                                                                    } else {
                                                                        echo "0 results";
                                                                    }
                                                                    ?>">
                        </div>
                    </div>
                    <br>
            </div>
        </div>

        <div class="package">
            <center>
                <h3>Package Details</h3>
            </center>
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="package_status">Package Status</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="bg" value="<?php
                                                                require_once('connecting.php');
                                                                $sql = "select * from track where track_id= '$track_id';";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        echo $row["package_status"];
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="dispatch_location">Dispatch location</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="bg" value="<?php
                                                                require_once('connecting.php');
                                                                $sql = "select * from track where track_id= '$track_id';";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        echo $row["dispatch_location"];
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="dispatch_date">Dispatch date</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="bg" value="<?php
                                                                require_once('connecting.php');
                                                                $sql = "select * from track where track_id= '$track_id';";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        echo $row["dispatch_date"];
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="esti_delivery_date">Estimated delivery date</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="bg" value="<?php
                                                                require_once('connecting.php');
                                                                $sql = "select * from track where track_id= '$track_id';";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        echo $row["esti_delivery_date"];
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="current_location">Current location</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="bg" value="<?php
                                                                require_once('connecting.php');
                                                                $sql = "select * from track where track_id= '$track_id';";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        echo $row["current_location"];
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>">
                    </div>
                </div>
                <br>


            </form>
        </div>
    </div>
  </section>


</body>

</html>