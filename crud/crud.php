<?php
// require the db_config
require_once "db_config.php";
require_once "component.php";

// create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

// if(isset($_POST['deleteall'])){
//     deleteAll();

// }

function createData(){
    $movietitle = textboxValue("mov_title");
    $movieduration = textboxValue("mov_duration");
    $movierate = textboxValue("mov_rating");
    if($movietitle && $movieduration && $movierate){
    $sql = "INSERT INTO movies (mov_title, mov_duration, mov_rating)
            VALUES ('$movietitle','$movieduration','$movierate')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Movie Successfully Added...!");
        }else{
            echo "Error";
        }
    }else{
      TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

// get data from mysql database
function getData(){
    $sql = "SELECT * FROM movies";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update data
function UpdateData(){
   $movieid = textboxValue("id");
   $movietitle = textboxValue("mov_title");
   $movieduration = textboxValue("mov_duration");
   $movierate = textboxValue("mov_rating");

    if($movietitle && $movieduration && $movierate){
    $sql = "UPDATE movies SET mov_title='$movietitle', mov_duration = '$movieduration', mov_rating = '$movierate' WHERE id='$movieid'; ";

   if(mysqli_query($GLOBALS['con'], $sql)){
    TextNode("success", "Movie Successfully Updated");
   }else{
    TextNode("error", "Enable to Update Data");
   }
 }else{
  TextNode("error", "Select Data Using Edit Icon");
 }
}
function deleteRecord(){
   $movieid = (int)textboxValue("id");
    $sql = "DELETE FROM movies WHERE id=$movieid";
    if(mysqli_query($GLOBALS['con'], $sql)){
      TextNode("success","Movie Deleted Successfully...!");
    }else{
      TextNode("error","Enable to Delete Record...!");
   }
}
function deleteBtn(){
    $result = getData();
    $i = 0;
    // if($result){
    //     while ($row = mysqli_fetch_assoc($result)){
    //         $i++;
    //     if($i > 3){
    //      buttonElement("btn-deleteall", "btn btn-danger" ,
    //      "<i class='fas fa-trash'></i> Delete All", "deleteall", "");
    //      return;
    //     }
    //     }
    // }
}

// function deleteAll(){
//     $sql = "DROP TABLE movies";

//     if(mysqli_query($GLOBALS['con'], $sql)){
//         TextNode("success","All Record deleted Successfully...!");
//         Createdb();
//     }else{
//         TextNode("error","Something Went Wrong Record cannot deleted...!");
//     }
// }


// set id to textbox
function setID(){
 $getid = getData();
 $movieid = 0;
if($getid){
  while ($row = mysqli_fetch_assoc($getid)){
   $movieid = $row['id'];
  }
}
 return ($movieid + 1);
}
