<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include_once "models/m_product.php";
include_once "models/m_api.php";
class c_api
{
    function AddToCart()
    {

        $m_api = new m_api();
        $m_api->AddToCart();

    }
}