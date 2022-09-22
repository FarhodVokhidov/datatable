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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" id="sample_form" method="post" class="form-horizontal">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>title :</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <textarea name="desc" id="desc" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price :</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <input type="hidden" name="action" id="action" value="add"/>
                    <input type="hidden" name="hidden_id" id="hidden_id" value="add"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="action_button" id="action_button" value="Add" class="btn btn-info"/>
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
                </form>
            </div>

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
        $('#create-record').click(function (){
            $('.modal-title').text('Add new Product');
            $('#action_button').val('Add');
            $('#action').val('Add');
            $('#form_result').html('');

            $('#formModal').modal('show');
        })
        $('#sample_form').on('submit',function (event){
            event.preventDefault();
            alert('Date submited');
        })
    });
</script>
</html>

