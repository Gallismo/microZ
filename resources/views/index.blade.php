<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
    <style>
        .grid {
            display: grid;
        }

        /* <576px */
        .grid-1 {
            display: grid;
            grid: auto-flow / 1fr;
        }
        .grid-2 {
            display: grid;
            grid: auto-flow / 1fr 1fr;
        }
        .grid-3 {
            display: grid;
            grid: auto-flow / 1fr 1fr 1fr;
        }
        .grid-4 {
            display: grid;
            grid: auto-flow / 1fr 1fr 1fr 1fr;
        }
        .grid-5 {
            display: grid;
            grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
        }
        .grid-6 {
            display: grid;
            grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
        }
        .grid-gap-1 {
            grid-gap: 0.5rem;
        }
        .grid-gap-2 {
            grid-gap: 1rem;
        }
        .grid-gap-3 {
            grid-gap: 1.5rem;
        }
        .grid-gap-4 {
            grid-gap: 2rem;
        }
        /* >=576px */
        @media (min-width: 576px) {
            .grid-sm-1 {
                display: grid;
                grid: auto-flow / 1fr;
            }
            .grid-sm-2 {
                display: grid;
                grid: auto-flow / 1fr 1fr;
            }
            .grid-sm-3 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr;
            }
            .grid-sm-4 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr;
            }
            .grid-sm-5 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-sm-6 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-gap-sm-1 {
                grid-gap: 0.5rem;
            }
            .grid-gap-sm-2 {
                grid-gap: 1rem;
            }
            .grid-gap-sm-3 {
                grid-gap: 1.5rem;
            }
            .grid-gap-sm-4 {
                grid-gap: 2rem;
            }
        }
        /* >=768px */
        @media (min-width: 768px) {
            .grid-md-1 {
                display: grid;
                grid: auto-flow / 1fr;
            }
            .grid-md-2 {
                display: grid;
                grid: auto-flow / 1fr 1fr;
            }
            .grid-md-3 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr;
            }
            .grid-md-4 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr;
            }
            .grid-md-5 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-md-6 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-gap-md-1 {
                grid-gap: 0.5rem;
            }
            .grid-gap-md-2 {
                grid-gap: 1rem;
            }
            .grid-gap-md-3 {
                grid-gap: 1.5rem;
            }
            .grid-gap-md-4 {
                grid-gap: 2rem;
            }
        }
        /* >=992px */
        @media (min-width: 992px) {
            .grid-lg-1 {
                display: grid;
                grid: auto-flow / 1fr;
            }
            .grid-lg-2 {
                display: grid;
                grid: auto-flow / 1fr 1fr;
            }
            .grid-lg-3 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr;
            }
            .grid-lg-4 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr;
            }
            .grid-lg-5 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-lg-6 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-gap-lg-1 {
                grid-gap: 0.5rem;
            }
            .grid-gap-lg-2 {
                grid-gap: 1rem;
            }
            .grid-gap-lg-3 {
                grid-gap: 1.5rem;
            }
            .grid-gap-lg-4 {
                grid-gap: 2rem;
            }
        }
        /* >=1200px */
        @media (min-width: 1200px) {
            .grid-xl-1 {
                display: grid;
                grid: auto-flow / 1fr;
            }
            .grid-xl-2 {
                display: grid;
                grid: auto-flow / 1fr 1fr;
            }
            .grid-xl-3 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr;
            }
            .grid-xl-4 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr;
            }
            .grid-xl-5 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-xl-6 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-gap-xl-1 {
                grid-gap: 0.5rem;
            }
            .grid-gap-xl-2 {
                grid-gap: 1rem;
            }
            .grid-gap-xl-3 {
                grid-gap: 1.5rem;
            }
            .grid-gap-xl-4 {
                grid-gap: 2rem;
            }
        }

        @media (max-width: 450px) {
            .grid-xs-1 {
                display: grid;
                grid: auto-flow / 1fr;
            }
            .grid-xs-2 {
                display: grid;
                grid: auto-flow / 1fr 1fr;
            }
            .grid-xs-3 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr;
            }
            .grid-xs-4 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr;
            }
            .grid-xs-5 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-xs-6 {
                display: grid;
                grid: auto-flow / 1fr 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-gap-xs-1 {
                grid-gap: 0.5rem;
            }
            .grid-gap-xs-2 {
                grid-gap: 1rem;
            }
            .grid-gap-xs-3 {
                grid-gap: 1.5rem;
            }
            .grid-gap-xs-4 {
                grid-gap: 2rem;
            }
        }
    </style>
    <style>
        #search_input {
            margin-bottom: 1rem;
        }
        .search_res_container {
            border: 1px solid black;
            border-radius: 1rem;
            padding: 1rem;
        }
    </style>

    <form action="#">
        <h4>Поиск записей</h4>
        <input type="text" id="search_input"><br>
        <button type="button" id="submit">Искать</button>
    </form>
    <div id="results" class="grid-5 grid-gap-2">

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset("js/script.js")}}"></script>
</body>
</html>
