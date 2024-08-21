<?php

include_once "./Student.php";

$s = new Student();
$resObj = array();
$method = $_SERVER['REQUEST_METHOD'];

if($method=="GET")
{
    if(isset($_GET['id']))
    {
        $resObj['code'] = 200;
        $resObj['message'] ="Data saved successfully";
        $resObj['data']=$s->getById($_GET['id']);
        echo json_encode($resObj);
    }
    else
    {
        $resObj['code'] = 200;
        $resObj['message'] ="Data saved successfully";
        $resObj['data']=$s->getall();
        echo json_encode($resObj);
    }
}
elseif($method=='POST')
{
    $resObj['code'] = 200;
        $resObj['message'] =$s->insert($_POST);
        echo json_encode($resObj);
}
elseif($method=='PUT')
{
    parse_str(file_get_contents('php://input'),$_PUT);
    $resObj['code'] = 200;
    $resObj['message'] =$s->update($_PUT);
    echo json_encode($resObj);
}
elseif($method=='DELETE')
{
    $resObj['code'] = 200;
    $resObj['message'] =$s->deleteById($_GET['id']);
    echo json_encode($resObj);
}

else
{
    $resObj['code'] = 403;
    $resObj['message'] ="Invalid method";
    echo json_encode($resObj);
}
?>