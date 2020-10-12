<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
          <tr>
              <th>Camapaign Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($campaign)
          <tr>
            {{-- <td>{{$item_1->id}}</td>
            <td>{{$item_1->name}}</td>
            <td>{{$item_2->name}}</td>
            <td>{{$item_2->package_quality}}</td>
            <td>{{$item_2->package_unit_price}}</td>
            <td>{{$item_3->product_name}}</td>
            <td>{{$item_3->product_quantity}}</td>
            <td>{{$item_3->product_unit_price}}</td> --}}
            <td>$0.87</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>