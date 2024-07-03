<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Expert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: url('../resources/img/img/hero/AK1-1.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }
        .container {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 5%
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        /* .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        } */
        .form-group label {
            color: #555;
        }
        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: none;
            padding-left: 40px;
            padding-right: 10px;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #f85a3e;
            box-shadow: 0 0 5px rgba(248, 90, 62, 0.2);
        }
        .btn-primary {
            background-color: #f85a3e;
            border-color: #f85a3e;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e04a2b;
            border-color: #e04a2b;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container ">
    <h1>Call Expert</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('reserver_expert.store')}}" method="POST">
        <div class="form-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
        @csrf
        <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group col-6">
            <label for="name">First Name</label>
            <input type="text" name="first_name" id="name" class="form-control" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
            <label for="name">Email</label>
            <input type="text" name="email" id="name" class="form-control" required>
        </div>
        <div class="form-group col-6">
            <label for="name">Cin</label>
            <input type="text" name="cin" id="name" class="form-control" required>
        </div>
        </div>

        <div class="row">
        <div class="form-group col-6">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="form-group col-6">
            <label for="email">Adresse</label>
            <input type="text" name="address" id="email" class="form-control" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
            <label for="email">Date </label>
            <input type="date" name="date" id="email" class="form-control" required>
        </div>
        
        <div class="form-group col-6">
            <label for="email">Expert</label>
            <select name="expert_id" id="expert" class="form-select" required>
                {{-- <option value="">Select Expert</option> --}}
                @foreach($experts as $expert)
                <option value="{{$expert->id}}">{{$expert->name}}</option>
                @endforeach
        </div>
        </div>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
</div>

<!-- Button "Précédent" outside the form -->
<div class="container-fluid text-right mt-3">
    <a href="/" class="btn btn-secondary ml-2" onclick="goToHomePage()">Précédent</a>
</div>

<script>
    function goToHomePage() {
        window.location.href = '/'; // Redirect to the home page
    }
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>