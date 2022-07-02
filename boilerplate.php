<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel = "icon" href ="https://img.icons8.com/ios/50/000000/apple-calculator.png" type = "image/x-icon">
    <title>Calculator</title>
</head>

<body>
    <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post" class="row m-5">
        <div class="col input-group m-1">
            <span class="input-group-text" id="basic-addon1">Operand 1</span>
            <input type="text" class="form-control" placeholder="Should be an integer">
        </div>
        <div class="col m-1">
            <select class="form-select" aria-label="Default select example">
                <option selected>Operator</option>
                <option value="1">&#x1F47D</option>
                <option value="2">&#x1F480</option>
                <option value="3">&#x1F47B</option>
                <option value="4">&#x1F631</option>
            </select>
        </div>
        <div class="col input-group m-1">
            <span class="input-group-text" id="basic-addon1">Operand 2</span>
            <input type="text" class="form-control" placeholder="Should be an integer">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary m-1">Calculate</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>