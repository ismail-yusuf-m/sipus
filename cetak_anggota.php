<?php
session_start();
if (!isset($_SESSION['sesi'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Anggota</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style type="text/css">
        @page {
            size: A4;
            margin-left: 15mm;
            margin-top: 15mm;
            margin-bottom: 15mm;
            margin-right: 15mm;
            /* margin you want for the content */
        }

        @media all {
            .page-break {
                display: none;
            }
        }

        @media print {
            .page-break {
                display: block;
                page-break-before: always;
            }
        }

        html {
            background-color: #FFFFFF;
            margin: 0px;
            /* this affects the margin on the html before sending to printer */
        }

        body {
            font-size: 12pt;
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            self.print();
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card-body">
                <h3>Laporan Data Anggota</h3>
                <table class="table table-bordered">
                    <tr>
                        <td>No</td>
                        <td>ID Anggota</td>
                        <td>Nama</td>
                        <td>Jenis Kelamin</td>
                        <td>Alamat</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>