<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-color: #F1F3F4;
        }

        #jumbo,
        #jumbo * {
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
        }

        label {
            font-weight: 500;
            padding-bottom: 5px;
        }

        .nav-link {
            font-weight: 600;
            font-size: 16px;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="row m-0">
        <div class="col-md-2 ps-0">
            @includeIf('admin.layout.sidebar')
        </div>
        <div class="col-md-10 pe-0">
            <div class="container-fluid pt-4">
                <div class="d-flex justify-content-between mb-4 bg-white p-3">
                    <div id="jumbo">
                        <a href="{{ route('admin.index') }}">Dashboard</a> / @yield('jumbo')
                    </div>
                    <div>
                        @yield('btn')
                    </div>
                </div>
                <div class="shadow p-3 bg-white" style="height:80vh ; overflow: auto;">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
