<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MobCast Assignment</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" />
    <style>
        table, th, td {
        border: 1px solid black;
        }
        td{
            font-size: small;
        }
        img{
            height: 100px;
            
        }
    </style>
        
    </head>
    <body class="">
    <div class="container">
        <h1>RSS Feed</h1>
        <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>PubDate</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($channel as $item)
        <tr>
            <!-- First Row  --> 
            <td><h3>{{ $item["title"]}}</h4></td>
            <td><img src="{{$item["enclosure"]["@url"]}}" alt="">   
            </td>
            <td><a href="{{$item['link']}}">{{$item['link']}}</a></td>
            <td>{{$item['pubDate']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    </body>
</html>
