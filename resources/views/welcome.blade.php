<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <center>
                    <table border="1"  >
                        <tr >
                        <td><a href = "{{ route('All')}}">All</a></td>
                        <td><a href = "{{ route('Hot')}}">Hot</a></td>
                        <td><a href = "{{ route('featured')}}">featured</a></td>
                        <td><a href = "{{ route('random')}}">random</a></td>
                        <td><a href = "{{ route('post')}}">post</a></td>
                        
                        </tr>
                    
                    </table>
                </center>
            </div>
        </div>
    </body>
</html>
