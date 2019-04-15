<html>
<head>
    <link href="{{asset('css/cost-profit.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">
        @extends('layout.side-bar')
        <div class="container">
            <div class="total-accounts col-md-10 col-md-offset-1">
                <div>
                    <h1>Total Fees: {{$costs}}</h1>
                </div><br>
                <div>
                    <h1>Total Cost</h1>
                </div>
            </div>

        </div>
    </div>
</body>
</html>