<div id="wrapper">
    @extends('layout.side-bar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-6 ">

                <div class="body-area col-md-10 col-md-offset-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="">
                        @csrf
                        <div class="header-top">
                            <h2>Change Password</h2>
                        </div>
                        <div class="form-group">
                            <label>Old Password <span style="color: red">* {{$message}}</span></label>
                            <input type="text" name="old-pass" id=" old-pass" class="form-control" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" name="new-pass" id=" new-pass" class="form-control" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="con-pass" id="con-pass" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div class="form-group">

                            <input type="submit"  class="btn btn-success form-control" value="Change Password">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

    </div>

</div>