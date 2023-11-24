<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container -mt 5 text-primary text-center"><h1>Assessment 2 - Web framework</h1></div>    

    <div class="container mt-5">
        <form action="{{ url('/redirect') }}" method="post">
            <div class="mb-5 text-end">
                <button type="submit" class="btn btn-success">Add New Project</button>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">No.</div>
            <div class="col">Name</div>
            <div class="col">Details</div>
            <div class="col">Action</div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>