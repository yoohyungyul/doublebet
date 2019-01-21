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
                <div>
                {!! trans('auth.failed') !!}
                </div>
                <div>
                <div class="navbar-header">
                    <div class="dropdown-toggle-wrap">
                        <div class="dropdown navbar-toggle langtoggle" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ url() }}/img/{{Cookie::get('language') ? Cookie::get('language') : 'en'}}</a>
                            <ul class="dropdown-menu langbg mainlang ">
                                <li><a href="{{ url() }}/lang/en">en</li>
                                <li><a href="{{ url() }}/lang/kr">kr</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="title">Laravel</div>
            </div>
        </div>
    </body>
</html>
