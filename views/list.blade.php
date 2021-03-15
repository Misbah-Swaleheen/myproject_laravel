<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>
    .z-0 svg{
        /* display:none; */
        width: 20px;
    }
</style>
</head>
<body>
    <div class="container">
        <h1 class="p-4">Showing Data</h1>
        <table class="table border text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Action</th>
                <th>Update</th>

            </tr>
@foreach ($member as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['city']}}</td>
    <td ><a href={{"delete/".$item['id']}}><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    <td ><a href={{"edit/".$item['id']}}><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

</tr>
@endforeach


        </table>
        <span >  {{$member->links()}}</span>

    </div>
</body>
</html>
