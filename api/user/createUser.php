<?php
if(isset($_POST['country']) && $_POST['country']>0){
    // echo 'TESTTT';
    include_once(''.__DIR__.'/../../connection.php');
    generateStateOptions();
    if(isset($_POST['state']) && $_POST['state']>0){
        generatePostalCodeOptions();
        if(isset($_POST['city']) && $_POST['city']>0){
            //CALL FUNCTION INSERTING NEW USER ON DATABASE
        }
    }
}else{
    // include_once('././connection.php');
    include_once(''.__DIR__.'/../../connection.php');

}

function generateCountryOptions() {

    $sql = "SELECT * FROM country";

    $conn = connectDB();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($_POST['country'] == $row['id']){
            echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
        }else{
            echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
        }
    }

    } else {
    echo "0 results";
    }

    disconnectDB($conn);

}

function generateStateOptions() {

    // if($_POST['country']>0)

    $sql = "SELECT * FROM state WHERE state.country_id=".$_POST['country'].";";

    $conn = connectDB();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    echo'
        <div class="form-floating mb-3">
            <!-- <input class="form-control" name="cep" id="inputCEP" type="text" placeholder="96105-103" /> -->
            <h6>Select your state: </h6>
            <select onChange="onStateChange()" id="state" class="form-control mb-3" name="cep" id="inputCEP">'; 
            echo('<option value="0"> ------- </option>');
        while($row = $result->fetch_assoc()) {
            if($_POST['state'] == $row['id']){
                echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
            }else{
                echo "  <option value='".$row["id"]."'>".$row["name"]."</option>";
            }
            
        }
        echo("
            </select>
                                                        
        </div>");
    } else {
    echo "0 results";
    }

    disconnectDB($conn);

}

function generatePostalCodeOptions() {

    $sql = "SELECT * FROM city WHERE city.state_id=".$_POST['state']."";

    $conn = connectDB();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <div class="form-floating mb-3">
        <!-- <input class="form-control" name="cep" id="inputCEP" type="text" placeholder="96105-103" /> -->
        <h6> Postal code: </h6>
    ';
    echo'<select id="city" onChange="onCityChange()" class="form-control mb-3" name="cep" id="inputCEP">';
    echo('<option value="0"> ------- </option>');
    while($row = $result->fetch_assoc()) {
        if($_POST['city']==$row['id']){
            echo "<option value='".$row["id"]."' selected>".$row["name"]." - ".$row["postal_code"]."</option>";
        }else{
            echo "<option value='".$row["id"]."'>".$row["name"]." - ".$row["postal_code"]."</option>";
        }
    }
    echo("</select>
    </div>");

    } else {
    echo "0 results";
    }

    disconnectDB($conn);

    }

?>