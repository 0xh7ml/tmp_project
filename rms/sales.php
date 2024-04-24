<?php 
include('header.php');
?>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-row justify-content-between mt-2 mb-2">

                <h3 class="text-light">Sales list</h3>
                <button class="btn btn-primary" type="submit" id="dwnld">Sales report</button>

            </div>
            <table class="table table-bordered table-hover table-light" id="sales_report">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Customer name</th>
                        <th>Customer Phone</th>
                        <th>Ordered Item</th>
                        <th>QTY</th>
                        <th>Total bill</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php 

                    if(isset($_POST["search"]) && !empty($_POST["search"])){
                        $keyword = $_POST["search"];

                        // search sale query 
                        $sql = "SELECT * from tb_items where item_name LIKE '%$keyword%'";
                    }
                    else{
                        // view sale query
                        $sql = "SELECT od.id, od.cus_name,od.cus_phone,item.item_name, od.qty, sum(item.item_price * od.qty) as total_bill FROM `tb_order` as od LEFT join tb_items as item ON od.line_item = item.id GROUP BY od.id; ";
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
                        <td><?php echo $rows["cus_name"]; ?></td>
                        <td><?php echo $rows["cus_phone"]; ?></td>
                        <td><?php echo $rows["item_name"]; ?></td>
                        <td><?php echo $rows["qty"]; ?></td>
                        <td><?php echo $rows["total_bill"]; ?></td>
                        <!-- <td class="w-25">
                            <a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a>
                            <a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a>
                        </td> -->
                    </tr>
                <?php } ; ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- PDF report Generator  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
    const report = document.getElementById('sales_report'); // report table id
    const downloadBtn = document.getElementById('dwnld'); // download button id

    downloadBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        var options = {
            filename: 'sales_report.pdf',
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf().from(report).set(options).save();
    })
    </script>
    <!-- ./PDF Generator -->
<?php
include('footer.php');
?>