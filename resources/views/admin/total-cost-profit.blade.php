<div id="wrapper">
    @extends('layout.side-bar')
    <div class="container">
        <div class="total-accounts col-md-10 col-md-offset-2">
            <div class="under-body">
                <button class="btn btn-info col-md-offset-10" onclick="HTMLtoPDF()">Download Pdf</button>
                <form method="post" action="">
                    @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="{{$start_date}}" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="{{$end_date}}" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn-success" style="margin-top: 30%;" value="Search">
                    </div>
                </div>
                </form>
                <div id="HTMLtoPDF">
                    <div class="row ">
                        <h1 class="col-md-6">Total Fees: </h1>
                        <h1 class="col-md-3">{{$fees}}</h1>
                    </div><br>

                    <div class="row ">
                        <h1 class="col-md-6">Total Cost: </h1>
                        <h1 class="col-md-3">{{$cost}}</h1>
                    </div><hr>
                    <div class="row ">
                        <h1 class="col-md-6">Total Profit: </h1>
                        <h1 class="col-md-3">{{$sum}}</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>