<?php
if(isset($_POST['country']) && $_POST['country']>0){
    // echo 'TESTTT';
    include_once(''.__DIR__.'/../../connection.php');
    generateStateOptions();
    if(isset($_POST['state']) && $_POST['state']>0){
        echo('Need to implement same type of function on postal code...');
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
        echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
    }

    } else {
    echo "0 results";
    }

    disconnectDB($conn);

}

function generateStateOptions() {

    if($_POST['country']>0)

    $sql = "SELECT * FROM state";

    $conn = connectDB();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    echo'
    <div class="form-floating mb-3">
    <!-- <input class="form-control" name="cep" id="inputCEP" type="text" placeholder="96105-103" /> -->
        <h6>Select your state: </h6>
        <select id="state" class="form-control mb-3" name="cep" id="inputCEP">'; 

    while($row = $result->fetch_assoc()) {

        echo "  <option value='".$row["id"]."'>".$row["name"]."</option>";
        echo("
            </select>
                                                        
        </div>");
        $_POST['state']=1;
    }
    } else {
    echo "0 results";
    }

    disconnectDB($conn);

}

function generatePostalCodeOptions() {

    if($_GET['state']>0)

    $sql = "SELECT * FROM city";

    $conn = connectDB();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["id"]."'>".$row["name"]." - ".$row["postal_code"]."</option>";
    }
    } else {
    echo "0 results";
    }

    disconnectDB($conn);

    }

?>