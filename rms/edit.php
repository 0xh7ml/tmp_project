<?php include('header.php'); ?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Item</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/rms/update.php">
                        <?php
                            if(isset($_GET['id']) && !empty($_GET['id'])){
                                $id = $_GET['id'];
                                $query = "SELECT * FROM `tb_items` WHERE id =" . $id ;
                                $res = mysqli_query($conn, $query);
                                while($rows=$res->fetch_assoc())
                                {
                            ?>
                            <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                            <div class="form-group">
                                <label for="name">Item name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $rows["item_name"] ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">Item price</label>
                                <input type="text" class="form-control" name="price" value="<?php echo $rows["item_price"] ?>">
                            </div>
                            <?php
                                }
                            };
                            ?>
                            <button type="submit" class="btn btn-success">Update Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include('footer.php'); ?>