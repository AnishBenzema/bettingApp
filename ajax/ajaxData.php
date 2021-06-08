<?php

$db = new mysqli('localhost', 'root', '', 'BETdb');

if (!empty($_POST["racenumber"])) {

    // Fetch state data based on the specific racenumber
    $query = "SELECT * FROM horse WHERE racenumber = " . $_POST['racenumber'] . " ORDER BY horsename ASC";

    $result = $db->query($query);

    // Generate HTML of horsename options list 
    if ($result->num_rows > 0) {

        echo '<option value="">Select Horse Name</option>';

        while ($row = $result->fetch_assoc()) {

            //echo '<option value="'.$row['id'].'">'.$row['horsename'].'</option>'; 
            echo '<option value="' . $row['horsename'] . '">' . $row['horsename'] . '</option>';
        }
    } else {

        echo '<option value="">Horse not available</option>';
    }
}

// Get Horses based on RaceNumber on BookMakers Betting 
if (!empty($_POST["racenumber"])) {

    $query = "SELECT * FROM horse WHERE racenumber = " . $_POST['racenumber'] . " ORDER BY horsename ASC";
    $result = $db->query($query);
    
}
