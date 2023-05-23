<?php 
include 'connection.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['uname'])) {
	header("Location: index.php");
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
<?php include "header.php"?>
<div class="container">
   
       <form class="form-horizontal" method="post">
       
       <div class="form-group" style="margin-left: 10px;">
            <label class="control-label col-sm-50" for="email"><b>Search  Record Information:</b>:</label>
            <div class="col-sm-20">
              <input type="text" class="form-control" name="search" placeholder="search here" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
            </div><br>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">search</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;"><?php echo $searchErr;?></span>
        </div>
    
      </form>   



        <table class="table" id="TableForm">
            <thead>
                <tr class="alert alert-info">
                    <th scope="col">Sl no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Last Name</th>
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
         

        if(confirm("Are you sure you want to delete this record?"))
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




</script>

<?php include "footer.php"?>