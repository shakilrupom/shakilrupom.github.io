<?php
require_once ("../../../vendor/autoload.php");
if(!isset($_SESSION))session_start();

use App\Utility\Utility;
use App\Message\Message;

$obj  =  new \App\Road\Road();

$allData =  $obj->index();
$msg = Message::message();

//Utility::dd($allData);



################## search  block 1 of 5 start ##################
if(isset($_REQUEST['search']) )$someData =  $obj->search($_REQUEST);
$availableKeywords=$obj->getAllKeywords();
$comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
################## search  block 1 of 5 end ##################




######################## pagination code block#1 of 2 start ######################################
$recordCount= count($allData);


if(isset($_REQUEST['Page']))   $page = $_REQUEST['Page'];
else if(isset($_SESSION['Page']))   $page = $_SESSION['Page'];
else   $page = 1;
$_SESSION['Page']= $page;


if(isset($_REQUEST['ItemsPerPage']))   $itemsPerPage = $_REQUEST['ItemsPerPage'];
else if(isset($_SESSION['ItemsPerPage']))   $itemsPerPage = $_SESSION['ItemsPerPage'];
else   $itemsPerPage = 3;
$_SESSION['ItemsPerPage']= $itemsPerPage;



$pages = ceil($recordCount/$itemsPerPage);

$someData = $obj->indexPaginator($page,$itemsPerPage);

$allData= $someData;


$serial = (  ($page-1) * $itemsPerPage ) +1;



if($serial<1) $serial=1;
####################### pagination code block#1 of 2 end #########################################






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
    <title>Road Service</title>
    <link href="../../../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/jquery-ui.css">
    <script src="../../../resource/bootstrap/js/jquery.js"></script>
    <script src="../../../resource/bootstrap/js/jquery-ui.js"></script>


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



    <div style="margin-left: 70%; margin-top:">
        <form id="searchForm" action="index.php"  method="get" style="margin-top: 5px; margin-bottom: 10px ">
            <input type="text" value="" id="searchID" name="search" placeholder="Search" width="60" >
            <input type="checkbox"  name="name"   checked  >By Name
            <input type="checkbox"  name="email"  checked >By Email
            <input hidden type="submit" class="btn-primary" value="search">
        </form>
    </div>

    <!-- required for search, block 4 of 5 start -->


<div class="container">
    <div class="page-header">


    <form id="selectionForm" action="trash_multiple.php" method="post">
        <h1> Active of - Client's List </h1>

        <div class="nav navbar">
            <a href="create.php" class='btn btn-primary'> <span class='glyphicon glyphicon-plus'> Add New </a>
            <input class="btn btn-warning" id="trashMultiple" type="button" value="Trash Multiple" >
            <input  class="btn btn-danger" id="deleteMultiple" type="button" value="Delete Multiple">
            <a href="pdf.php" class="btn btn-primary">Download as PDF</a>
            <a href="xl.php" class="btn btn-success">Download as XL</a>
            <a href="email.php" class="btn btn-info">E-mail to A Friend</a>
        </div>

        <?php echo "<div>  <div id='message'>  $msg </div>   </div>"; ?>


        <table class="table table-bordered table-striped">

                    <tr>
                            <th>Check All <input type="checkbox" name="select_all" id="select_all"></th>
                            <th>Serial</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Member</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Action Buttons</th>
                    </tr>


    <?php

     // $serial=1;
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
                                 <a href='edit.php?id=$record->id' class='btn btn-success'> <span class='glyphicon glyphicon-edit'> Edit </a>
                                 <a href='trash.php?id=$record->id' class='btn btn-warning'><span class='glyphicon glyphicon-trash'></span> Trash </a>
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
</div>




<div class="col-md-2 col-md-offset-10">
   <a href="../index.php" class="btn btn-success">Back To Website</a>
</div>
<!--  ######################## pagination code block#2 of 2 start ###################################### -->
<div align="left" class="container">
    <ul class="pagination">

            <?php

                    $pageMinusOne  = $page-1;
                    $pagePlusOne  = $page+1;


                    if($page>$pages) Utility::redirect("index.php?Page=$pages");

                    if($page>1)  echo "<li><a href='index.php?Page=$pageMinusOne'>" . "Previous" . "</a></li>";


                    for($i=1;$i<=$pages;$i++)
                    {
                        if($i==$page) echo '<li class="active"><a href="">'. $i . '</a></li>';
                        else  echo "<li><a href='?Page=$i'>". $i . '</a></li>';

                    }
                    if($page<$pages) echo "<li><a href='index.php?Page=$pagePlusOne'>" . "Next" . "</a></li>";

            ?>

            <select  class="form-control"  name="ItemsPerPage" id="ItemsPerPage" onchange="javascript:location.href = this.value;" >
                    <?php
                    if($itemsPerPage==3 ) echo '<option value="?ItemsPerPage=3" selected >Show 3 Items Per Page</option>';
                    else echo '<option  value="?ItemsPerPage=3">Show 3 Items Per Page</option>';

                    if($itemsPerPage==4 )  echo '<option  value="?ItemsPerPage=4" selected >Show 4 Items Per Page</option>';
                    else  echo '<option  value="?ItemsPerPage=4">Show 4 Items Per Page</option>';

                    if($itemsPerPage==5 )  echo '<option  value="?ItemsPerPage=5" selected >Show 5 Items Per Page</option>';
                    else echo '<option  value="?ItemsPerPage=5">Show 5 Items Per Page</option>';

                    if($itemsPerPage==6 )  echo '<option  value="?ItemsPerPage=6" selected >Show 6 Items Per Page</option>';
                    else echo '<option  value="?ItemsPerPage=6">Show 6 Items Per Page</option>';

                    if($itemsPerPage==10 )   echo '<option  value="?ItemsPerPage=10" selected >Show 10 Items Per Page</option>';
                    else echo '<option  value="?ItemsPerPage=10">Show 10 Items Per Page</option>';

                    if($itemsPerPage==15 )  echo '<option  value="?ItemsPerPage=15" selected >Show 15 Items Per Page</option>';
                    else    echo '<option  value="?ItemsPerPage=15">Show 15 Items Per Page</option>';
                    ?>
            </select>
    </ul>
</div>
<!--  ######################## pagination code block#2 of 2 end ###################################### -->



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

    $("#trashMultiple").click(function(){

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