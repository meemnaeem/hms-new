<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <div class="container">
        <livewire:counter />
        <p class="badge bg-primary text-wrap">Welcome to my website...</p>
        <p class="fs-1">.fs-1 text</p>
        <p class="fs-2">.fs-2 text</p>
        <p class="fs-3">.fs-3 text</p>
        <p class="fs-4">.fs-4 text</p>
        <p class="fs-5">.fs-5 text</p>
        <p class="fs-6">.fs-6 text</p>

        <!-- Simple Bootstrap Alert-->
        <div class="alert alert-primary" role="alert">
            A simple primary alert—check it out!
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Open modal
        </button>

        <!-- Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>



        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
