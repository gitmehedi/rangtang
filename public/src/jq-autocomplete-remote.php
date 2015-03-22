<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Autocomplete - Default functionality</title>
    <link rel="stylesheet" href="../../bower_components/jquery-ui/themes/eggplant/jquery-ui.min.css"/>
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $(function () {
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
//            $("#tags").autocomplete({
//                source: availableTags
//            });
            $(function () {
                $('#tags').autocomplete({
                    source: function (request, response) {
                        console.log(request.term);
                        $.ajax({
                            url: 'result.php',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                q: request.term
                            },
                            success: function (data) {
                                response($.map(data, function (value, key) {
                                    return {
                                        label: value.name,
                                        value: value.name,
                                        hiddenVal: value.id
                                    };
                                }));
                            }
                        });
                    },
                    minLength: 1,
                    select: function (event, ui) {
                        $('#valueid').val(ui.item.hiddenVal);
                        this.value = ui.item.value
                        return false;
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="ui-widget">
    <form action="jquery-auto-post-data.php" method="post">
        <label for="tags">Tags: </label>
        <input id="tags" name="name['name']">
        <input id="valueid" type="hidden" name="name['value']"/>
        <input type="submit" value="ADD">
    </form>
</div>


</body>
</html>