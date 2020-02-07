<?php
    include("connect.php");
    $pid = $_GET["stdCode"];
    $sql = "SELECT * FROM student WHERE stdCode=?";

    //Prepare
    $stmt = $conn->stmt_init();
    $stmt->prepare($sql);
    //bind parameter ?
    $stmt->bind_param('i',$pid);
    //execute
    $stmt->execute();
    $result = $stmt->get_result();
    $prd=array();
    if($result->num_rows>0){
        $prd = $result->fetch_array();        
    }
    else{
        $prd["firstname"]="Student not found";
        $prd["lastname"]="Student not found";
    }

    $json = json_encode($prd);

    echo $json;
?>