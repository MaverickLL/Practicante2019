<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #b6b8b0;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
			#uno {
				position:fixed;
				background:#4140f6;
				color: #fff;
				width:220px;
                min-height: 850px;
				
				float:left;
			}
			
			#dos {
				background:#fff;
				color: #000;
				float:right;
				width:82.8%;
				min-height:750px;
			}
			
			#tres {
				background:#cc0000;
				color: #fff;
				width:82.8%;
				height:100px;
				
				float:right;
				
			}
			
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="uno" > menu 
				
				
				
				
				</div>
				
				<div id="dos">cuerpo
				
				
				</div>
				
				<div id="tres">pie de pagina
				
				
				
				</div>
				
				
				
				
				

                </div>
            </div>
        </div>
    </body>
</html>
