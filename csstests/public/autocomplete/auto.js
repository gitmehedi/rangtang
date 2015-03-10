$(document).ready(function () {



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

        var ajaxReq = $.ajax({
            type: "POST",
            url: ""
        });
        ajaxReq.done(function (res) {
            console.log(res);
        });

        $("#tags").autocomplete({
            source: availableTags
        });

});