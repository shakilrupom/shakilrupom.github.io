<?php
require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Message\Message;

$obj  =  new \App\Road\Road();

$allData =  $obj->trashed();
$msg = Message::message();
//Utility::dd($allData);

################## search  block 1 of 5 start ##################
if(isset($_REQUEST['search']) )$someData =  $obj->search($_REQUEST);
$availableKeywords=$obj->getAllKeywords();
$comma_separated_keywords= '"'.implode( '","',$availableKeywords).'"';
################## search  block 1 of 5 end ##################



################## search  block 2 of 5 start ##################

if(isset($_REQUEST['search']) ) {
    $someData = $obj->search($_REQUEST);
    $serial = 1;

    $allData=$someData;

}
################## search  block 2 of 5 end ################

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trashed</title>
    <link href="../../../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>

    <style>

        h1{
            text-align: center;

        }

        #message{
            background-color: #2aabd2;
            text-align: center;
        }

        h2{
            font-family:"Book Antiqua";
        }
        #lik {
            margin-left: 320px;
            margin-top: -58px;
            font-family: Bodoni MT;

        }
        #link{
            font-size: 17px;
            color: darkblue;

        }

        #link:hover{
            background-color:whitesmoke;
            font-size: 20px;
            font-family:daibannasilbook;
            color: crimson;
        }
        #likk{
            font-size:50px;
            text-align: left;
            color: orangered;
            font-family: Bodoni MT;
            font-style: oblique;
        }
        .page-header{
            margin-top: -10px;
        }

    </style>


</head>
<body>

<div class="templete">



    <div style="margin-left: 70%; margin-top: -19px">
        <form id="searchForm" action="index.php"  method="get" style="margin-top: 5px; margin-bottom: 10px ">
            <input type="text" value="" id="searchID" name="search" placeholder="Search" width="60" >
            <input type="checkbox"  name="byTitle"   checked  >By Title
            <input type="checkbox"  name="byAuthor"  checked >By Author
            <input hidden type="submit" class="btn-primary" value="search">
        </form>
    </div>

    <!-- required for search, block 4 of 5 start -->

<div class="container">
    <div class="page-header">
                <form id="selectionForm" action="recover_multiple.php" method="post">

                    <h1> Trashed of - Book List </h1>

                    <div class="nav navbar">
                        <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left">&nbsp;Back</a>
                        <input class="btn btn-success" id="recoverMultiple" type="button" value="Recover Multiple" >
                        <input  class="btn btn-danger" id="deleteMultiple" type="button" value="Delete Multiple">
                        <a href="pdf.php" class="btn btn-primary">Download as PDF</a>
                        <a href="xl.php" class="btn btn-success">Download as XL</a>
                        <a href="email.php" class="btn btn-info">Download as E-mail</a>
                    </div>


     <?php echo "<div>  <div id='message'>  $msg </div>   </div>"; ?>



                <table class="table table-bordered table-striped">

                    <tr>
                    <th>Check All <input type="checkbox" name="select_all" id="select_all"></th>
                        <th>Serial</th>
                        <th>ID</th>
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Action Buttons</th>
                        </tr>

                    <?php
                      $serial=1;
                    foreach($allData as $record ){

                        echo "
                       <tr>
                            <td><input type='checkbox' class='checkbox' name='selectedIDs[]' value='$record->id'></td>
                            <td>$serial</td>
                            <td>$record->id</td>
                            <td>$record->name</td>
                            <td>$record->email</td>
                            <td>$record->telephone</td>
                            <td>$record->member</td>
                            <td>$record->fromWhere</td>
                            <td>$record->toWhere</td>
                            <td>
                                 <a href='view.php?id=$record->id' class='btn btn-primary'> <span class='glyphicon glyphicon-eye-open'> View </a>
                                 <a href='edit.php?id=$record->id' class='btn btn-success'> <span class='glyphicon glyphicon-pencil'> Edit </a>
                                 <a href='recover.php?id=$record->id' class='btn btn-info'><span class='glyphicon glyphicon-trash'></span> Recover </a>
                                 <a href='delete.php?id=$record->id' class='btn btn-danger' onclick='return confirm_delete()'> <span class='glyphicon glyphicon-scissors'> Delete </a>
                            </td>
                       </tr>
                     ";
                        $serial++;
                    }//end of foreach loop

                    ?>

                </table>

                </form>
    </div>
</div>




<script src="../../../resource/bootstrap/js/jquery.js"></script>

<script>


    jQuery(

        function($) {
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
        }
    )
</script>


<script>
    function confirm_delete(){
        return confirm(" Are you sure? ");
    }
</script>


<script>

    //select all checkboxes
    $("#select_all").change(function(){  //"select all" change
        var status = this.checked; // "select all" checked status
        $('.checkbox').each(function(){ //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $('.checkbox').change(function(){ //".checkbox" change
//uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){ //if this item is unchecked
            $("#select_all")[0].checked = false; //change "select all" checked status to false
        }

//check "select all" if all checkbox items are checked
        if ($('.checkbox:checked').length == $('.checkbox').length ){
            $("#select_all")[0].checked = true; //change "select all" checked status to true
        }
    });

</script>



    <!-- required for search, block 5 of 5 start -->
    <script>

        $(function() {
            var availableTags = [

                <?php
                echo $comma_separated_keywords;
                ?>
            ];
            // Filter function to search only from the beginning of the string
            $( "#searchID" ).autocomplete({
                source: function(request, response) {

                    var results = $.ui.autocomplete.filter(availableTags, request.term);

                    results = $.map(availableTags, function (tag) {
                        if (tag.toUpperCase().indexOf(request.term.toUpperCase()) === 0) {
                            return tag;
                        }
                    });

                    response(results.slice(0, 15));

                }
            });


            $( "#searchID" ).autocomplete({
                select: function(event, ui) {
                    $("#searchID").val(ui.item.label);
                    $("#searchForm").submit();
                }
            });


        });

    </script>
    <!-- required for search, block5 of 5 end -->



<script>

    $("#deleteMultiple").click(function(){


        if(isEmptySelection()){

            alert("Please Select First!!!");
        }
        else{

            var r = confirm("Are you sure you want to delete selected record(s)");

            if(r==true){

                var selectionForm = $("#selectionForm");
                selectionForm.attr("action","delete_multiple.php");
                selectionForm.submit();
            }

        }

    });

</script>


<script>

    function isEmptySelection(){

        empty = true;

        $(".checkbox").each(function(){
            if(this.checked==true) empty=false;

        });
        return empty;
    }

    $("#recoverMultiple").click(function(){

       if(isEmptySelection()){

           alert("Please Select First!!!");

       }
        else {

            $("#selectionForm").submit();




       }
    });

</script>



</body>
</html>