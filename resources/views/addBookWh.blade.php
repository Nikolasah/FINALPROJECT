<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1> Warehouse </h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$barang->barangTitle}}</h5>
          <h5 class="card-title">{{$barang->author}}</h5>
          <h5 class="card-title">{{$barang->price}}</h5>
          <h5 class="card-title">{{$barang->quantity}}</h5>
        </div>
    </div>

    <form method="POST" action="/store/warehouse/{{$barang->id}}">
        @csrf
        <div class="mb-3">
          <label for="warehouse" class="form-label">Warehouse</label>
          @foreach ($warehouses as $warehouse)
            <br>
            <input type="radio" id="wareHouse" name="WH" value="{{$warehouse->id}}">
            <label for="wareHouse">{{$warehouse->address}} & {{$warehouse->phoneNum}}</label>
          @endforeach
        </div>
        <input type="number" class="form-control" value="{{$barang->id}}" name="idbarang" style="visibility: hidden">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
