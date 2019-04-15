<html>
    <head>
        {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
        <link href="{{asset('css/cost.css')}}" rel= "stylesheet" type="text/css">
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
    <div id="wrapper">
        @extends('layout.side-bar')
    <div class="container clearfix col-md-11 col-md-offsed-2" style="margin-top: 109px;">
        <div class="row " >
            <div class="col-md-12 table-responsive" >
                <form method="post" enctype="multipart/form-data">
                    @csrf
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                    <tr >
                        <th class="text-center">
                            Name of Cost
                        </th>
                        <th class="text-center">
                            Taka
                        </th>
                        <th class="text-center">
                            Date
                        </th>
                        {{--<th class="text-center">--}}
                            {{--Option--}}
                        {{--</th>--}}
                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">Action</th>
                    </tr>
                    </thead>
                    <tbody>


                        <tr id='addr0' data-id="0">
                            <td data-name="name">
                                <input type="text" name="costName[]" required placeholder='Name of cost' class="form-control"/>
                            </td>
                            <td data-name="Taka">
                                <input type="number" name="taka[]" required placeholder='Taka' class="form-control"/>
                            </td>
                            <td data-name="date">
                                <input type="date" name="date[]" required placeholder="Date" class="form-control">
                            </td>
                            {{--<td data-name="sel">--}}
                                {{--<select name="sel0">--}}
                                    {{--<option value="">Select Option</option>--}}
                                    {{--<option value="1">Option 1</option>--}}
                                    {{--<option value="2">Option 2</option>--}}
                                    {{--<option value="3">Option 3</option>--}}
                                {{--</select>--}}
                            {{--</td>--}}
                            <td data-name="del">
                                <button name= "delete" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <a id="add_row" class="btn btn-default pull-right">Add Row</a>
    </div>
    </div>



    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#add_row").on("click", function() {
                // Dynamic Rows Code

                // Get max row id and set new id
                var newid = 0;
                $.each($("#tab_logic tr"), function() {
                    if (parseInt($(this).data("id")) > newid) {
                        newid = parseInt($(this).data("id"));
                    }
                });
                newid++;

                var tr = $("<tr></tr>", {
                    id: "addr"+newid,
                    "data-id": newid
                });

                // loop through each td and create new elements with name of newid
                $.each($("#tab_logic tbody tr:nth(0) td"), function() {
                    var cur_td = $(this);

                    var children = cur_td.children();

                    // add new td and element if it has a nane
                    if ($(this).data("name") != undefined) {
                        var td = $("<td></td>", {
                            "data-name": $(cur_td).data("name")
                        });

                        var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                        c.attr("name", $(cur_td).data("name") + newid);
                        c.appendTo($(td));
                        td.appendTo($(tr));
                    } else {
                        var td = $("<td></td>", {
                            'text': $('#tab_logic tr').length
                        }).appendTo($(tr));
                    }
                });

                // add delete button and td
                /*
                $("<td></td>").append(
                    $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                        .click(function() {
                            $(this).closest("tr").remove();
                        })
                ).appendTo($(tr));
                */

                // add the new row
                $(tr).appendTo($('#tab_logic'));

                $(tr).find("td button.row-remove").on("click", function() {
                    $(this).closest("tr").remove();
                });
            });




            // Sortable Code
            var fixHelperModified = function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();

                $helper.children().each(function(index) {
                    $(this).width($originals.eq(index).width())
                });

                return $helper;
            };

            $(".table-sortable tbody").sortable({
                helper: fixHelperModified
            }).disableSelection();

            $(".table-sortable thead").disableSelection();



            $("#add_row").trigger("click");
        });
    </script>
    </body>
</html>




