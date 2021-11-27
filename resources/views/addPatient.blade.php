<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .message{
            height: 60px;
            color: rgb(33, 66, 39);
            text-align: center
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            
            <form class='mainform col-md-5 mt-5 mx-auto' method="post" action="{{route('create')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="patientName" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" value="{{old('name')}}" id="patientName" name="name" placeholder="Name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="patientAge" class="form-label">Patient Age</label>
                    <input type="text" class="form-control" value="{{old('age')}}" name="age" id="patientAge" placeholder="Age">
                    @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputState" class="form-label">Gender</label>
                    <select name="gender" id="inputState" class="form-select">
                        <option >Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="inputState" class="form-label">Result</label>
                    <select name="result" id="inputState" class="form-select">
                        <option >Choose...</option>
                        <option {{old('result')=='negative'?'Selected':'';}} value="negative">Negative</option>
                        <option {{old('result')=='postive'?'Selected':'';}} value="postive">Postive</option>
                    </select>
                    @error('result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <button type="submit" class="btn btn-primary mx-auto">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        const name = document.getElementsById('patientName'),
            age = document.getElementsById('age'),
            gender = document.getElementsById('gender'),
            result = document.getElementsById('result');

        function clearData() {
            name.setAttribute('value')='';
        };
    </script>
</body>
</html>