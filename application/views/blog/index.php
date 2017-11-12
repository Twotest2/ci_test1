<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>"/>
</head>
<body>
    
    <div class="navbar navbar-default">
        <div class="container">
            <h2>
                <span class="glyphicon glyphicon-home"></span>
                &nbsp;Welcome to my blog 
            </h2>
        </div>
    </div>
    <div class="container">
        <h3>Blog List</h3>
        <a href="<?php echo base_url('blog/add') ?>"
            class="btn btn-primary">
            Add New 
        </a>
        <table class="table table-bordered table-responsive">
            <thread>
                <tr>
                    <td>ID</td>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>test</td>
                    <td>my description</td>
                    <td>2016</td>
                    <td>
                        <a href="<?php echo base_url('') ?>"
                            class="btn btn-info">Edit</a>
                        <a href="<?php echo base_url('') ?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>