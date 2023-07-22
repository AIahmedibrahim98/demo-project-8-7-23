<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        <div class="card text-start">
            <div class="card-body">
                <h4 class="card-title">{{ date('Y-m-d h:i:s a') }}</h4>
                <h4 class="card-title">{{ "<script>alert('hack')</script>" }}</h4>
                <h4 class="card-title">{!! "<h1 style='color:red'>Hello</h1>" !!}</h4>
                <h4 class="card-title">{{ "<h1 style='color:red'>Hello</h1>" }}</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
        @if (date('d') > 22)
            <h1> the day biger than 22</h1>
        @elseif (date('d') == 22)
            <h1 class="text-dark"> We Are in 2023 in day 22</h1>
        @else
            <h1 class="text-danger"> We Are not in 2023 in day 22</h1>
        @endif
        @unless (date('d') >= 22)
            test in 22
        @endunless

        {{-- commented code --}}
        @php
            // native php
        @endphp
        @php($x = 22)

        @switch($x)
            @case(5)
                <h1>this is 5</h1>
            @break

            @case(2)
                <h1>this is 2</h1>
            @break

            @default
                <h2>invalid</h2>
        @endswitch

        {{-- @isset($records)
            // $records is defined and is not null...
        @endisset

        @empty($records)
            // $records is "empty"...
        @endempty --}}
        <hr>
        @php($y = 0)
        @while ($y < 10)
            <h1>{{ $y++ }}</h1>
        @endwhile

        @for ($i = 0; $i < 10; $i++)
            <h3 class="text-primary">form for loop : {{ $i }}</h3>
        @endfor
        @php($students = ['ahmed' => 50, 'sara' => 60, 'maha' => 90])

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Degree</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $name => $degree)
                        {{-- @continue($name == 'ahmed') --}}
                        {{-- @break($name == 'sara') --}}
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            {{-- <td scope="row">{{ $loop->index }}</td> --}}
                            <td class="{{ $loop->first ? 'fw-bold text-primary' : '' }} text-center">{{ $name }}
                            </td>
                            <td class="{{ $loop->last ? 'fw-bold text-primary' : '' }}">{{ $degree }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Degree</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $name => $degree)
                        {{-- @continue($name == 'ahmed') --}}
                        {{-- @break($name == 'sara') --}}
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            {{-- <td scope="row">{{ $loop->index }}</td> --}}
                            <td @class(['text-primary' => $loop->first, 'text-center'])>
                                {{ $name }}</td>
                            <td class="{{ $loop->last ? 'fw-bold text-primary' : '' }}">{{ $degree }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @once
                @push('scripts')
                    <script>
                        // Your custom JavaScript...
                    </script>
                @endpush
            @endonce
            @pushOnce('scripts')
                <script>
                    // Your custom JavaScript...
                </script>
            @endPushOnce
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.xyz/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
