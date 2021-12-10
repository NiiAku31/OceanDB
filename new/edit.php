<?php
require __DIR__.'/database_connection_test.php';

$id = $_GET['id'];
echo $id;

$query = mysqli_query($conn, "SELECT * FROM practical_lab_table WHERE Lab_id = '$id'");

$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
{
    $search_term = $_POST['search term'];

    $edit = mysqli_query($conn, "UPDATE practical_lab_table SET Search_term = '$search_term' WHERE LAB_ID = '$id'");

    if($edit){
        mysqli_close($conn);
        header("location:my_form.php");
        exit;
    }
    else{
        echo mysqli_error();
    }
}

?>

<h3> Updating the database below</h3>
<form method="POST">
    New Search Word: <input type="text" name="search_term" value="<?php echo $data['Search_term']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>