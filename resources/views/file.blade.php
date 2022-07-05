<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    {{-- ex using component x-component_name --}}
    @if (Session::has('success'))
        <div>
            {{ session()->get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div>
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('file.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-2"> <span>Attachments</span>
                            <div
                                class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                <div class="absolute">
                                    <div class="flex flex-col items-center "> <i
                                            class="fa fa-cloud-upload fa-3x text-gray-200"></i>
                                        <span class="block text-gray-400 font-normal">Attach
                                            you files here</span> <span
                                            class="block text-gray-400 font-normal">or</span>
                                        <span class="block text-blue-400 font-normal">Browse
                                            files</span>
                                    </div>
                                </div>
                                <input type="file" class="h-full w-full opacity-0" name="file">
                            </div>
                        </div>
                        <div class="mt-3 text-center pb-3">
                            <button type="submit" class="button">Save</button>
                        </div>
                        <button class="button is-primary">Alright</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
