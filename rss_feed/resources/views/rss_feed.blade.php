<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>RSS Feed</h1>
        <table id="rssTable" class="display">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td><a href="{{ $item['link'] }}" target="_blank">Link</a></td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['pubDate'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#rssTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
</body>
</html>