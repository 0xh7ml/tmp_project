<?php include('header.php'); ?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add Item</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/rms/insert_item.php">
                            <div class="form-group">
                                <label for="name">Item name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">Item price</label>
                                <input type="text" class="form-control" id="name" name="price" required>
                            </div>
                            <button type="submit" class="btn btn-success">Add item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('footer.php'); ?>