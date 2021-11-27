<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .qr{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    @if (session()->has('message'))
                <div class="alert alert-success mt-2 mx-auto message" role="alert">
                    <h5>{{session()->get('message')}}</h5>
                </div>
            @endif
    <div class="qr mx-auto mt-5" style="width: 16rem">
        {!! QrCode::size(250)->generate('/patient/'.$data->client_id ); !!}
        <button class="btn btn-primary mt-5" s>Download</button>
    </div>
</body>
</html>