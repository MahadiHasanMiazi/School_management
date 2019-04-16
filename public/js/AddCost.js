var dynamicRowindex=1;
var dynamicImageUploadindex=1;

function addNewDetailsRow() {

    var newRow="           <div class=\"row\" id=\"newDynamicDetailsRow"+dynamicRowindex+"\">\n" +
        "\n" +
        "                                                    <div class=\"col-md-3\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Size</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\"  name=\"size[]\" class=\"form-control\" id=\"size\" placeholder=\"\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "\n" +
        "                                                    <div class=\"col-md-3\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Color</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\" required name=\"color[]\" class=\"form-control\" id=\"color\" placeholder=\"\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "\n" +
        "                                                    <div class=\"col-md-3\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Quatity</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\" required name=\"total_quantity[]\" class=\"form-control\" id=\"quantity\" placeholder=\"\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "                                                   <div class=\"col-md-3\">\n" +
        "                                                       <div class=\"form-group\">\n" +
        "                                                           <label class=\"control-label mb-10\"></label>\n" +
        "                                                           <div class=\"input-group\">\n" +
        "                                                               <button type=\"button\" class=\"btn btn-danger\" type=\"button\" onclick=\"removeDynamicDetailsRow("+dynamicRowindex+")\">X</button>\n" +
        "                                                           </div>\n" +
        "                                                       </div>\n" +
        "                                                   </div>\n" +
        "                                                   </div>";


     $("#quantity_input").append(newRow);
    dynamicRowindex++;
     return false;
}

function addCategory() {

        var newRow=" <div id='categoryHtml' class=\"row\">\n" +
            "\n" +
            "                                                    <div class=\"col-md-4\">\n" +
            "                                                        <div class=\"form-group\">\n" +
            "                                                            <label class=\"control-label mb-10\">Category Name</label>\n" +
            "                                                            <div class=\"input-group\">\n" +
            "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
            "                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputuname\" placeholder=\"\">\n" +
            "                                                            </div>\n" +

            "                                                        </div>\n" +
            "                                                    </div>\n" +
            "\n" +
            "                                                    <button type='button' id='saveCategory' onclick='sendCategory()'>Save</button> |"+
            "                                                    <button type='button' id='categoryCancel' onclick='removeCategoryHtml()' type='button'>Cancel</button>"+
            "\n" +
            "                                                </div>";

        $("#newCategory").html(newRow);

        $("#addNewCategory").hide();

        return false;

}

function removeDynamicDetailsRow(index){
    $("#newDynamicDetailsRow"+index).remove();
}

function removeCategoryHtml() {
        $("#categoryHtml").remove();
    $("#addNewCategory").show();
}

function sendCategory() {
    var categoryName = $('#exampleInputuname').val();
    $("#category").append("<option selected value=\""+categoryName+"\">"+categoryName+"</option>");
    $("#categoryHtml").remove();
}

