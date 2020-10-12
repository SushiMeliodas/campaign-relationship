<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
          <tr>
              <th>Camapaign Name</th>
              <th>Package Name</th>
              <th>Package Quantity</th>
              <th>Package Unit Price</th>
              <th>Product Name</th>
              <th>Product Quantity</th>
              <th>Product Unit Price</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($campaign as $campaigns)
          <tr>
            <td>{{$campaigns->campaign_name}}</td>
            <td>{{$campaigns->package_name}}</td>
            <td>{{$campaigns->package_quantity}}</td>
            <td>{{$campaigns->package_unit_price}}</td>
            <td>{{$campaigns->product_name}}</td>
            <td>{{$campaigns->product_quantity}}</td>
            <td>{{$campaigns->product_unit_price}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
