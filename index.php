<?php 
require_once 'dao/categoryDAO.php'; //ininclude ko itong class para pwede ko magamit ang kanyang mga function

$mainCategories = categoryDAO::mainCategories(); //tinatawag ko ang function na ito para makuha ko ang lahat ng main category

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>DYNAMIC DROPDOWN</title>
</head>

<body>
    <div>

        <form method="post" action="controller/edit.php">

            <div>MAIN CATEGORY
                <select name="main" id="main" style="width:200px;">
                	<option disabled selected>SELECT MAIN CATEGORY</option>
                <?php foreach($mainCategories as $main): ?>
                    <option value="<?= $main['main_category_id'] ?>"><?= $main['main_category_name'] ?></option>
                <?php endforeach; ?>   
                </select>
            </div>

            <div>
            	CATEGORY SUB 1
                <select name="sub1" id="sub1" style="width:200px;">
                    <option value=""></option>
                </select>
            </div>

            <div>
            	CATEGORY SUB 2
                <select name="sub2" id="sub2" style="width:200px;">
                    <option value=""></option>
                </select>
            </div>

        </form>
    </div>
</body>

</html>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {


    $("#main").change(function() { //kapag namili ka sa MAIN CATEGORY
        var main = $('#main').val(); //kukunin niya ang value ng pinili mong main catagory


		/*==== katulad lang ito sa form ng html ====*/
        $.ajax({
            type: "POST", //method
            url: "controller/get-sub1.php", //action
            data: {
                main: main //name
            },
            success: function(res) {
                $("#sub1").html(res); //dito sa #sub1 niya ipiprint ang resulta
            }
        });
    });


    $("#sub1").change(function() { //kapag namili ka sa SUB1 CATEGORY
        var sub1 = $('#sub1').val(); //kukunin niya ang value ng pinili mong sub1 catagory

        /*==== katulad lang ito sa form ng html ====*/
        $.ajax({
            type: "POST", //method
            url: "controller/get-sub2.php", //action
            data: {
                sub1: sub1 //name
            },
            success: function(res) {
                $("#sub2").html(res); //dito sa #sub2 niya ipiprint ang resulta
            }
        });
    });


});



</script>
