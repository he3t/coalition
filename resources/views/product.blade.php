<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product List</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        #products {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #products td, #products th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #products tr:nth-child(even){background-color: #f2f2f2;}

        #products tr:hover {background-color: #ddd;}

        #products th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
  <div style="padding: 20px;">
    <a href="/dashboard">add product</a>
  </div>
  <table id="products">
    <tr>
      <th>Product Name</th>
      <th>Quantity in stock</th>
      <th>Price per Item</th>
      <th>Total value number</th>
    </tr>
    @foreach($data as $d)
    <tr>
      <td>{{ $d->product_name }}</td>
      <td>{{ $d->quantity_in_stock }}</td>
      <td>{{ $d->price_per_item }}</td>
      <td>{{ $d->quantity_in_stock * $d->price_per_item }}</td>
    </tr>
    @endforeach
    </table>
</body>

</html>
