<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="page-header text-center ">Laravel 9 CRUD DataTable</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <h2>Product Table

            </h2>
            <div align="right"><button type="button" name="create-record" id="create-record" class="btn btn-success pull-right"><i class="bi bi-plus-square"></i> Add Product</button></div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <table class="table table-bordered table-striped table-responsive product_table">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Tittle</th>
                <th>Desc</th>
                <th>Price</th>
                <th width="180px">Action</th>
                </thead>
                <tbody>

                </tbody>
            </table>


        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function (){
        var table = $('.product_table').DataTable({
            processing: true,
            serveSide: true,
            ajax:"{{route('product.index')}}",
            columns:[
                {data:'id',name:'id'},
                {data:'name',name:'name'},
                {data:'title',name:'title'},
                {data:'desc',name:'desc'},
                {data:'price',name:'price'},
                {data:'action',name:'price',orderable:false,serachable:false},
            ]
        });
    });
</script>
</html>

