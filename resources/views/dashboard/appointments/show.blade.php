<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: #fff;
        }
        .bg-gradien{
            background: #cf560096;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8;
        }
        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none;
        }
        .profile-button:hover {
            background: #682773;
        }
        .profile-button:focus {
            background: #682773;
            box-shadow: none;
        }
        .profile-button:active {
            background: #682773;
            box-shadow: none;
        }
        .back:hover {
            color: #682773;
            cursor: pointer;
        }
        .labels {
            font-size: 14px;
            margin-top: 15px !important;
            margin-bottom: 6px !important;
            text-transform: capitalize;
        }
        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8;
        }
    </style>
</head>
<body>
    <div class="container rounded bg-gradien mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            {{-- <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center text-black p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset($appointment->client->photo) }}">
                    <span class="font-weight-bold">{{ $appointment->client->name }} {{ $appointment->client->first_name }}</span>
                    <span class="text-black">{{ $appointment->client->email }}</span>
                    <span>{{ $appointment->client->phone }}</span>
                </div>
            </div> --}}
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="text-right">Appointment Details</h2>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels fw-bold">Date</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->date }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels fw-bold">Status</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->status }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels fw-bold">Client</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->client->name }} {{ $appointment->client->first_name }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels fw-bold">Client CIN</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->client->cin }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels fw-bold">Client Tel</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->client->phone }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels fw-bold">Expert</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->expert->first_name }} {{ $appointment->expert->name }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels fw-bold">Expert Phone</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->expert->phone }}">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary px-5" onclick="return confirm('Voulez-vous revenir en arrière ?')" href="{{ route('appointments.index') }}">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
