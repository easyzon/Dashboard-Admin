<?php
    session_start();
    include('connect.php');
    include('function.php');

if (isset($_POST['add_category_btn'])) {
    $name =$_POST['name'];
    $slug =$_POST['slug'];
    $description =$_POST['description'];
    $meta_title =$_POST['meta_title'];
    $meta_description =$_POST['meta_description'];
    $meta_keywords =$_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '0':'1';
    $popular = isset($_POST['popular']) ? '0':'1';
    // Upload Image
    $image = $_FILES['image']['name'];
    // Image store path
    $path ="../admin/upload/";
    // 
    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext ;

    $cate_query = "INSERT INTO
     category 
        (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image)
    Values 
        ('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$image')";

    $cate_query_run =mysqli_query($con,$cate_query);

    if ($cate_query_run) 
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'../admin/upload/'.$filename);
            redirect("../admin/view-collection.php", "Category Add successful");

        }else
        {
            redirect("add-category.php", "Something Went Wrong");
        }
    
}


?>