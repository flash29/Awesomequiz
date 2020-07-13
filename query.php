
<?php
require_once('Connect.php');

//echo "<script type="."'text/javascript'"."src="."'quiz.js'"."><p id="."'t4'"."></p></script>";
/*
echo "<p id='t4'></p>";
echo "hello";
echo "<script type='text/javascript' src='quiz.js'><p id='t4'></p></script>";
*/
//echo $_COOKIE["score"];
$score= $_COOKIE["score"];
//$insert ="insert into studentinfo(name, score) values('".$_POST["name"]."','".$_POST["score"]."')"; this works just a copy
$insert ="insert into studentinfo(name, score) values('".$_POST["name"]."','".$score."')";
@mysqli_query($dbc, $insert);
//$in =@mysqli_query($dbc, $insert);
/*
if(@mysqli_query($dbc, $insert)){
  echo "succesfully recorded";
}
else{
  echo "failed";
}
*/
$q="select name, score from studentinfo order by score desc limit 10";
$response=@mysqli_query($dbc,$q);
if($response){
  while($row=mysqli_fetch_array($response)){
    echo $row['name'];
    echo "\t";
    echo "\t";
    echo "\t";
    echo $row['score']."<br>";
  //  echo '\n';
  }
}

?>
