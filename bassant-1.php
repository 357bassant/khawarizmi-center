<?phb

$firstname=$_REQUEST{'firstname'};
$secondname=$_REQUEST{'secondname'};
$address=$_REQUEST{'address'};


if(isset($_post{'btntest'}))

{

    $host="localhost";
$user ="root";
$password="";
$db="bis_level_four";

$conn=mysqli_connect($host,$user,$password,$db)


    $insert="insert into studentsbisinfo values('$firstname','$secondnam','$address');

    mysqil_query($conn,$insert);

    if($cann){
        echo("<ch1 style = 'color:green;'>your registration is done!</h1>"");
    }
    else{
        echo("<ch1 style = 'color:red;'>your registration is failed!</h1>"");


    

?>

