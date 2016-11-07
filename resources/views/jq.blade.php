<html>
<head>
    <title>The jQuery Example</title>
    <script type="text/javascript" src="/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////--}}

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $(".medium, #div3").css("background-color", "yellow");  //select one class and one ID
        });
    </script>

    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////--}}
    <script type="text/javascript" language="javascript">

        $(document).ready(function() {
            var title = $("em").attr("title");
            $("#divid").text(title);
        });

    </script>
    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////--}}


</head>
<body>



<div>
    <em title="Bold and Brave">This is first paragraph.</em>
    <p id="myid">This is second paragraph.</p>
    <div id="divid"></div>
</div>



<div class="big" id="div1">
    <p>This is first division of the DOM.</p>
</div>

<div class="medium" id="div2">
    <p>This is second division of the DOM.</p>
</div>

<div class="small" id="div3">
    <p>This is third division of the DOM</p>
</div>

</body>
</html>
