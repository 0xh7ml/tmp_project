<?php include('header.php'); ?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create order</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/rms/insert_order.php">
                            <div class="form-group">
                                <label for="name">Customer name</label>
                                <input type="text" class="form-control" id="name" name="cus_name" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">Customer Phone</label>
                                <input type="text" class="form-control" id="name" name="cus_phone" required>
                            </div>

                            <label for="name">Item</label>
                            <select class="form-control mb-2" name="line_item" required>
                                    <option value="">Select Item</option>
                                    <?php
                                        $query = "select * from tb_items";

                                        $res = mysqli_query($conn, $query);


                                        while($row=$res->fetch_assoc()){
                                    ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['item_name'];?></option>
                                    <?php
                                        }
                                    ?>
                            </select>

                            <div class="form-group mb-2">
                                <label for="name">QTY</label>
                                <input type="text" class="form-control" id="name" name="qty" required>
                            </div>
                            <button type="submit" class="btn btn-success">Create Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include('footer.php'); ?>