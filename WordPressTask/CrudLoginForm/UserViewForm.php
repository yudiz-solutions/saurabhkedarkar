<?php 
include 'connection.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['uname'])) {
	header("Location: loginForm.php");
}


$searchErr = '';
$searchRow='';


$sqlSearch ="SELECT * FROM registerform "; 
if(isset($_POST['save']))
{   
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $sqlSearch ="SELECT * FROM registerform WHERE uname like '%$search%' or fname like '%$search%' or email like '%$search%' or lname like '%$search%'";
        $resultSearch = mysqli_query($con, $sqlSearch);
    }
    else
    {
        $searchErr = 'Please enter text to search data';
    }
    
}
$resultSearch = mysqli_query($con, $sqlSearch);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <style>
        table {
           font-weight: bold;
           border: 1px solid black;
           padding: 10px;
           text-align: center;
           margin-top: 20px;
        }
        .container{
         margin-top: 30px;
        }
    </style>
</head>

<body>
   <div class="container">
       <form class="form-horizontal" method="post">
       <div class="row">
       <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search  Record Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">search</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
      </div>
      </form>   

   </div>

    <div class="container">
        <table class="table" id="TableForm">
            <thead>
                <tr class="alert alert-info">
                    <th scope="col">Sl no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Country</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Opration</th>
                 </tr>
            </thead>

            <tbody>                
                <?php               
                    $num=0;                  
                    while($searchRow = mysqli_fetch_assoc($resultSearch)){
                           $num ++;
                           $id=$searchRow["id"];
                          
                        echo'<tr id='. $id.'>
                            <th scope="row" >'.$num.' </th>
                            <td scope="row" >'.$searchRow["fname"].' </td>
                            <td scope="row" >'.$searchRow["uname"].' </td>
                            <td scope="row" >'.$searchRow["lname"].' </td>
                            
                            <td scope="row" >'.$searchRow["dob"].' </td>
                            
                            <td scope="row" >'.$searchRow["country"].' </td>
                            <td scope="row"><img src="'.$searchRow["profile"].'"width=100 height=120></td>
                            <td scope="row">
                             <a class="btn btn-primary" href="Editphp.php?editid='.$searchRow["id"].'" class="text-light" >Edit</a>
                             <button class="btn btn-danger btn-sm remove"  >Delete</button>
                            </td>

                        </tr>';
                       

                       }
                ?>
            </tbody>

        </table>
     <a class="btn btn-danger" href="logout.php">LogOut</a>
    </div>
 <!-- -------------------------------------------------------------- -->

 <script type="text/javascript">
  
    $(document).on("click",".remove",function(){
        var id = $(this).parents("tr").attr("id");
         Swal.fire({
	        icon: 'warning',
  	        title: 'Are you sure you want to delete this record?',
  	        showDenyButton: false,
  	        showCancelButton: true,
  	        confirmButtonText: 'Yes'
           }).then((result) => {

        if(result.isConfirmed)
        {
            $.ajax({
               url: 'Delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                   swal("Cancelled", "Your imaginary file is safe :)", "error");
               },
               success: function(data) {
                    $("#"+id).remove();
                    swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
               }
            });
        }
    });
});



</script>

</body>

</html>