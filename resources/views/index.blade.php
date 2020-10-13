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
          @foreach ($campaigns as $campaign)
          @foreach($campaign->campaignPackages as $package)
          @foreach($package->packageProducts as $product )
          <tr>
            <td>{{$campaign->campaign_name}}</td>
            <td>{{$package->package_name}}</td>
            <td>{{$package->package_quantity}}</td>
            <td>{{$package->package_unit_price}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_quantity}}</td>
            <td>{{$product->product_unit_price}}</td>
          </tr>
          @endforeach
          @endforeach
          @endforeach
        </tbody>
      </table>
</body>
</html>
