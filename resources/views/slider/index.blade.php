<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">UUID</th>
                <th scope="col">Title</th>
                <th scope="col">Path</th>
                <th scope="col">Alter</th>
                <th scope="col">caption</th>
                <th scope="col">Created By</th>
                <th scope="col">Updated By</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $slider->uuid }}</td>
                <td>{{ $slider->title }}</td>
                {{-- show image from public folder --}}
                <td><img src="{{ asset($slider->path) }}" alt="{{ $slider->alt }}" width="100px" height="100px"></td>
                <td>{{ $slider->alt }}</td>
                <td>{{ $slider->caption }}</td>
                <td>{{ $slider->created_by }}</td>
                <td>{{ $slider->updated_by }}</td>
                <td>{{ $slider->created_at->format('d-M-Y h:i:s a') }}</td>
                <td>{{ $slider->updated_at }}</td>
            </tr>
            @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
