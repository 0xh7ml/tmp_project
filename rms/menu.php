<?php 
include('header.php');
?>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-row justify-content-between mt-2 mb-2">

                <h3>Item List</h3>

                <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search by Item name" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
            <table class="table table-bordered table-hover table-light">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Item name</th>
                        <th>Item Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                    if(isset($_POST["search"]) && !empty($_POST["search"])){
                        $keyword = $_POST["search"];

                        // search query 
                        $sql = "SELECT * from tb_items where item_name LIKE '%$keyword%'";
                    }
                    else{
                        // view data query
                        $sql = "SELECT * FROM tb_items";
                    }

                    $res = mysqli_query(
                        $conn, $sql
                    );
                    mysqli_close($conn);
    
                    while($rows=$res->fetch_assoc())
                    {
                ?>
                    <tr>
                        <td><?php echo $rows["id"]; ?></td>
                        <td><?php echo $rows["item_name"]; ?></td>
                        <td><?php echo $rows["item_price"]; ?></td>
                        <td class="w-25">
                            <a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a>
                            <a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php } ; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
include('footer.php');
?>