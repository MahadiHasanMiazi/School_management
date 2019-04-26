<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{asset('css/cost.css')}}" rel= "stylesheet" type="text/css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div id="wrapper">
    @extends('layout.side-bar')
    <form method="post" enctype="multipart/form-data">
        @csrf
    <div id="quantity_input" class="col-md-10 col-md-offset-2" style="margin-top: 40px;">

        <div class="row">


            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label mb-10">Cost of Reason</label>
                    <div class="input-group">

                        <input  type="text" name="CostReason[]" class="form-control" id="size" placeholder="">
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label mb-10">Amount</label>
                    <div class="input-group">

                        <input required="" type="number" name="amount[]" class="form-control" id="color" placeholder="">
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label mb-10">Quatity</label>
                    <div class="input-group">
                        <input required="" type="date" name="date[]" class="form-control" id="quantity" placeholder="">
                    </div>
                </div>
            </div>



        </div>


    </div>
    <input type="submit" value="Submit" class="btn-primary col-md-offset-2">
    </form>
    <button type="button" class="btn btn-success btn-icon left-icon col-md-offset-8 " onclick="addNewDetailsRow()">Add New Size</button>


</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Then include bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="{{asset('js/AddCost.js')}}"></script>
</body>
</html>

