<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=number] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @mediascreen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        <form method="post">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="pname">Product Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="pname" name="productname" placeholder="Product name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="quantity">Quantity in stock</label>
                </div>
                <div class="col-75">
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price">Price per item</label>
                </div>
                <div class="col-75">
                    <input type="number" id="price" name="price" placeholder="Price..">
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Add">
            </div>
        </form>
    </div>
    <div style="padding: 20px;">
      <a href="/product">show product list</a>
    </div>
</body>

</html>
