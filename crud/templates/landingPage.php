<main>
<div class="container text-center">
<h1 class="py-4 bg-dark text-light"><i class="fa fa-vimeo-square"></i> Add Your Favority Movie
</h1>
<div class="d-flex justify-content-center addMovie">
<form action="" method="post" class="w-50">
<div class="pt-2">
<?php inputElement("<i class='fa fa-id-badge'></i>",
  "ID", "id", setID()) ?>
</div>
<div class="pt-2">
<?php inputElement("<i class='fa fa-film'></i>",
"Movie Title", "mov_title",""); ?>
</div>
<div class="row pt-2">
<div class="col">
    <?php inputElement("<i class='fa fa-clock-o'></i>",
    "Movie Duration", "mov_duration",""); ?>
</div>
<div class="col">
    <?php inputElement("<i class='fa fa-star-half'></i>",
    "Rating Movie", "mov_rating",""); ?>
</div>
</div>
<div class="d-flex justify-content-center">
   <?php buttonElement("btn-create","btn btn-success","<i class='fa fa-plus'></i> Create","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
   <?php buttonElement("btn-read","btn btn-primary","<i class='fa fa-refresh'></i> Read","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
   <?php buttonElement("btn-update","btn btn-light border","<i class='fa fa-pencil-square-o'></i> Update","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
   <?php buttonElement("btn-delete","btn btn-danger","<i class='fa fa-trash-o'></i> Delete","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
   <?php deleteBtn();?>
</div>
</form>
</div>
<!-- Bootstrap table  -->
<div class="d-flex table-data resultMovie">
<table class="table table-striped table-dark">
 <thead class="thead-dark">
     <tr>
         <th>ID</th>
         <th>Movie Title</th>
         <th>Duration</th>
         <th>Rate</th>
         <th>Edit</th>
     </tr>
 </thead>
<tbody id="tbody">
<?php if(isset($_POST['read'])){
$result = getData();

if($result){

 while ($row = mysqli_fetch_assoc($result)){ ?>
  <tr>
      <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
      <td data-id="<?php echo $row['id']; ?>"><?php echo $row['mov_title']; ?></td>
      <td data-id="<?php echo $row['id']; ?>"><?php echo $row['mov_duration']; ?></td>
      <td data-id="<?php echo $row['id']; ?>"><?php echo '* ' . $row['mov_rating']; ?></td>
      <td ><i class="fa fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
  </tr>

<?php
       }

   }
}
?>
 </tbody>
</table>
</div>
</div>