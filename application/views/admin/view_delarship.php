<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('template/header-links.php') ?>

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include('template/header.php') ?>
        <?php include('template/sidebar.php') ?>

        <div class="page-wrapper">
            <div class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="page-title">View Delarship Query</h4>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="head-icons">
                                        <a href="companies.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Collapse" id="collapse-header"><i
                                                class="ti ti-chevrons-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <div class="icon-form mb-3 mb-sm-0">
                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
                                            <div class="dropdown me-2">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="ti ti-package-export me-2"></i>Export
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);" id="exportPdf" class="dropdown-item">
                                                                <i class="ti ti-file-type-pdf text-danger me-1"></i>Export as PDF
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" id="exportExcel" class="dropdown-item">
                                                                <i class="ti ti-file-type-xls text-green me-1"></i>Export as Excel
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- /Search -->
                            </div>
                            <div class="card-body">
                                <?php if ($msg = sessionId('msg')) :

                                    $msg_class = sessionId('msg_class') ?>

                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>

                                        </div>

                                    </div>

                                <?php

                                    $this->session->unset_userdata('msg');

                                endif; ?>

                                <!-- Contact List -->
                                <div class="table-responsive custom-table" id="dataList">
                                    <table class="table datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="no-sort">S No.</th>
                                                
                                                <th>Name</th>
                                                <th>Company Name</th>

                                                <th>Email</th>
                                              
                                                <th>Contact</th>
                                                <th>Business Type</th>

                                                <th>Address</th>
                                                <th>Message</th>


                                                <th>Action</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody id="customerTable">
                                            <?php

                                            $i = 1;

                                            if ($delarship) {

                                                foreach ($delarship as $row) {

                                            ?>
                                                    <td><?= $i++; ?></td>
                                                    <td> <?= $row['owner_name']; ?></td>
                                                    <td> <?= $row['company_name']; ?></td>

                                                    <td><?= $row['email']; ?></td>
                                                  
                                                    <td><?= $row['phone']; ?></td>
                                                    <td><?= $row['bussiness_type']; ?></td>
                                                    <td><?= $row['city']; ?>,<?= $row['pincode']; ?>,<br>
                                                    <?= $row['country']; ?></td>


                                                    <td><p><?= $row['message']; ?></p></td>
                                                 
                                                  
                                                    <td>



                                                        <a  href="<?php echo base_url() . 'admin_Dashboard/view_delarship?BdID=' . $row['id']?>"
                                                                    onclick="return confirm('Are you sure you want to delete this delarship?');">
                                                                    <i class="ti ti-trash text-danger"></i>
                                                                </a>


                                                    </td>
                                                    </tr>
                                            <?php

                                                    $i++;
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="datatable-length"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="datatable-paginate"></div>
                                    </div>
                                </div>
                                <!-- /Contact List -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('template/footer.php') ?>
    <!-- Include jsPDF and SheetJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Export to PDF
    document.getElementById("exportPdf").addEventListener("click", function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        
        // Title
        doc.text("Dealership", 14, 15);

        // Get table data
        doc.autoTable({
            html: ".datatable",
            startY: 20,
            theme: "grid",
            headStyles: { fillColor: [52, 152, 219] }, // Blue Header
            styles: { fontSize: 10 },
        });

        doc.save("Dealership.pdf");
    });

    // Export to Excel
    document.getElementById("exportExcel").addEventListener("click", function () {
        let table = document.querySelector(".datatable");
        let wb = XLSX.utils.table_to_book(table, { sheet: "Dealership" });

        // Save as Excel file
        XLSX.writeFile(wb, "Dealership.xlsx");
    });
});
</script>
<script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#customerTable tr");

        rows.forEach(function(row) {
            let text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? "table-row" : "none";
        });
    });
</script>
</body>