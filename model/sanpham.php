<?php
function insert_sanpham($name,$price,$image,$mota,$iddm){
    $sql = "INSERT INTO products(name,price,img,description,category_id) 
    VALUES ('$name','$price','$image','$mota','$iddm')";
    pdo_execute($sql);
}
function loadAllsp(){
    $sql = "SELECT * FROM products";
    $listAll = pdo_query($sql);
    return $listAll;
}
function delete_sanpham($id,$status){
    $sql = "UPDATE products 
    SET status = '$status'
    WHERE product_id = '$id';";
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM products WHERE product_id = '$id';";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($idsp,$name,$price,$image,$mota,$iddm){
    if($image !=""){
        $sql = "UPDATE products SET name='$name', price='$price',img='$image',description='$mota',category_id='$iddm' WHERE product_id = '$idsp';";
    } else{
        $sql = "UPDATE products SET name='$name', price='$price',description='$mota',category_id='$iddm' WHERE product_id = '$idsp';";
    }
    pdo_execute($sql);
}
function loalspnew(){
    $sql = "SELECT * FROM `products` ORDER BY product_id DESC limit 0,4";
    return pdo_query($sql);
}
function loalspnb(){
    $sql = "SELECT * FROM `products` ORDER BY view DESC limit 0,4";
    return pdo_query($sql);
}
?>