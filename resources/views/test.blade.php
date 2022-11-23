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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
