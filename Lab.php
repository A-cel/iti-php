<?php
/*Number 01*/
/*A*/
// $name ="serag";
// $man = sha1($name);
// echo $man; //clac hash of string
/*B*/
// $sim1 = similar_text('ahmed', 'tako', $perc); // get similarity percent
// echo "similarity: $sim1 ($perc %)\n";
/*C*/
// $name = "abdullah";
// $split=str_split($name);
// $split1=str_split($name,5);
// var_dump($split);     /*cut from string and convert first value to array */
// echo "<br>";
// var_dump($split1);
/*D*/
// $info = "Hello i'am Here"; 
// if (str_contains($info, 'am')) {
//     echo "Right"."<br>";
// }else{
//     echo "NA";
// }
/*E*/
// $nums = ' widijdicjwiqjkqwkmxqwmix';
// echo strlen($nums); // 25
/*2- Use 5 Array Functions from PHP Documentation[Not the same in Lecture]
and understand them with implementation samples.*/
/*A*/
// $Array1=['DataBase','Back-End','Front-End'];
// $Array2=['Mongo','Js','React'];
// $ArrConcat=array_combine($Array1,$Array2);
// print_r($ArrConcat);
/*B*/
// $Arr=['Sameh','Islam','Omran','Hashem'];
// $ArrFlib=array_flip($Arr);
// print_r($ArrFlib);
/*C*/
// $Arr=[
//     'z'=>'zaki',
//     'b'=>'basant',
//     '35'=>'tito',
//     '9'=>'space x'
// ];
// print_r(array_slice($Arr,0,4));
// print_r(array_slice($Arr,0,4,true));
/*D*/
// $heroes = array("d" => "tonystark", "a" => "hulk", "t" => "thor", "c" => "captinamerica");
// function test_alter(&$item1, $key, $prefix)
// {
//     $item1 = "$prefix: $item1";
// }
// function test_print($item2, $key)
// {
//     echo "$key. $item2\n";
// }
// echo "Before ...:\n";
// array_walk($heroes, 'test_print');
// array_walk($heroes, 'test_alter', 'heroes');
// echo "... and after:\n";
// array_walk($heroes, 'test_print');
/*E*/
// $Arr = ['kar-kr','ak-47','moega3','pizzahut','cheesecake'];
// $shifting=array_shift($Arr);
// print_r($Arr);
/*3- Make Your Own Valid Function/s to Protect form.php data [not accept empty inputs and validate every string input]*/

function validate($data){
$data=strip_tags($data);
$data=trim($data);
$data=stripcslashes($data);
$data=htmlspecialchars($data);
return $data;
}
function is_required($data){
    if(empty($data)){
        echo"no it is required";
    }else{
        return validate($data);
    }
}
echo is_required($_POST['fn']);

?>
<div class="row">
    <div class="col-4">
        <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h3 class="display-3">Sign In!</h3>
            <div class="col-12">
                <label class="form-label">FName</label>
                <input type="text" class="form-control" id="FN" name="fn" >
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" id="LN" name="ln" >
            </div>
            <br/>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>