<?php
include "connection.php";

$sql = "SELECT * FROM `post_table` INNER JOIN `meta_post` ON post_table.id = meta_post.post_id";
$result = mysqli_query($con, $sql);

$data = array(); // Array to store fetched data

while ($row = mysqli_fetch_array($result)) {
    $post_id = $row['post_id'];
    if (!isset($data[$post_id])) {
        $data[$post_id] = array(
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'email' => $row['email'],
            'massage' => $row['massage'],
            'file' => $row['file'],
            'caption' => '',
            'password' => ''
        );
    }

    // Check if the current row has the "caption" or "password" key
    if ($row['key'] === 'caption') {
        $data[$post_id]['caption'] = $row['value'];
    } elseif ($row['key'] === 'password') {
        $data[$post_id]['password'] = $row['value'];
    }
}

?>

<?php include "header.php"?>

<div class="container my-5">
    <div style="padding-bottom: 10px;">
        <a href="postAdd.php"><button class="btn btn-primary">Add Post</button></a>
    </div>

    <table class="table" id="TableForm">
        <thead>
            <tr class="alert alert-info">
                <th scope="col">Sl no</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Profile</th>
                <th scope="col">Massage</th>
                <th scope="col">Caption</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 0;
            foreach ($data as $post_id => $row) {
                $num++;
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $massage = $row['massage'];
                $file = $row['file'];
                $caption = $row['caption'];
                $password = $row['password'];

                ?>
                <tr>
                    <th scope="row"><?php echo $num; ?></th>
                    <td scope="row"><?php echo $fname; ?></td>
                    <td scope="row"><?php echo $lname; ?></td>
                    <td scope="row"><?php echo $email; ?></td>
                    <th scope="row"><img src="<?php echo $file; ?>" width="100" height="120"></th>
                    <td scope="row"><?php echo $massage; ?></td>
                    <td scope="row"><?php echo $caption; ?></td>
                    <td scope="row"><?php echo $password; ?></td>
                    <td>
                        <a href="postEdit.php?editid=<?php echo $post_id; ?>"><button class="btn btn-success">Edit</button></a>
                        <a href="postDelete.php?deleteid=<?php echo $post_id; ?>"><button class="btn btn-danger">Delete</button></a>
                        </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>

<?php include "footer.php" ?>

