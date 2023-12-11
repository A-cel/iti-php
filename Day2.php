<?php
/* Number 01*/
     $langs = ["php","html","js","css"];
    /*Number 02*/
     // foreach($langs as $lang){
    //     echo $lang."<br>";
    // }
    // $len = count($langs);
    // for($i = 0 ;$i < $len ; $i++){
    //     echo $langs[$i]."<br>";
    // }
    // $i = 0 ;
    // while($i < $len){
    //     echo $langs[$i]."<br>";
    //     $i++ ;
    // }
    ?>
 
<?php
    
    
    $My_Info  = ["Name"=>"Ahmed Abdulrahman","Age"=>24,"Email"=>"afathi708@gmail.com","College"=>"Faculty of commerce"];

?>
<div class="card mt-3">
<div class="card-header">
      Info
        </div>
        <div class="card-body row">

<table class="table text-center table-bordered">

    <tr> <td>Name</td> <td> <?php echo $My_Info['Name']; ?></td>    </tr>
    <tr> <td>Email</td> <td> <?php echo $My_Info['Email']; ?></td> </tr>
    <tr> <td>Age</td> <td> <?php echo $My_Info['Age']; ?></td> </tr>
    <tr>  <td>College</td> <td> <?php echo $My_Info['College']; ?></td> </tr>

</table>

</div>
</div>

<?php 

?>

<div class="card mt-3">
<div class="card-header">
    Form
        </div>
        <div class="card-body row">
<form action="Data.php" method="post" class="row">

  <div class="mb-3 col-4">
    <label class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" >
  </div>
  <div class="mb-3 col-4">
    <label class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control"  >
  </div>
  <div class="mb-3 col-4">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control"  >
  </div>

  <div class="mb-3 col-12">
    <label class="form-label">Country</label>
    <select class="form-select" aria-label="Default select example" name="country">
  <option selected value="">Select Country</option>
  <option value="eg">Egypt</option>
  <option value="mr">Morocco</option>
  <option value="uae">UAE</option>
</select>
  </div>


  <div class="mb-3 col-12">
    <label class="form-label">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" value="male" name="gender" id="male" checked>
  <label class="form-check-label" for="male">
    M
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="female" name="gender"  id="female" >
  <label class="form-check-label" for="female">
  F
  </label>
</div>
</div>
<div class="mb-3 col-12">
<label class="form-label">Skills</label>
<div class="row">
<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="C#" class="form-check-input" id="C#">
    <label class="form-check-label" for="C#">C#</label>
</div>
<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="SQL" class="form-check-input" id="SQL">
    <label class="form-check-label" for="SQL">SQL</label>
</div>

<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="Python" class="form-check-input" id="Python">
    <label class="form-check-label" for="Python">Python</label>
</div>

<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="TS" class="form-check-input" id="TS">
    <label class="form-check-label" for="TS">TS</label>
</div>


</div>


  </div>
  <div class="mb-3 col-4">
  <button type="submit" class="btn btn-primary" name="submit" value="OK">Submit</button>
</div>
</form>

</div>
</div>