<!DOCTYPE html>
<?
/*
* Author by Hilman Fadillah
* Copyright 2016
* hiidoc.blogspot.com
*/
?>
<html>
<head>
    <title>Select Checkbox</title>
</head>
<body>
    &nbsp <input id="checkAll" type="checkbox"><strong> Select All</strong><br>
    &nbsp <input class="chk" type="checkbox"> 1 </td><br>
    &nbsp <input class="chk" type="checkbox"> 2 </td><br>
    &nbsp <input class="chk" type="checkbox"> 3 </td><br>
    &nbsp <input class="chk" type="checkbox"> 4 </td><br>
    &nbsp <input class="chk" type="checkbox"> 5 </td><br>
    &nbsp <input class="chk" type="checkbox"> 6 </td><br>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#checkAll").click(function () {
                $('.chk').prop('checked', this.checked);
                });
            $(".chk").click(function () {
                $("#checkAll").prop('checked', ($('.chk:checked').length == $('.chk').length) ? true : false);                
            });
        });
        </script>
    </script> 
</body>
</html>