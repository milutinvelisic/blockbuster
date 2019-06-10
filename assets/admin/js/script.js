window.onload = function () {

    if ($("#datatype")) {
        $("#datatype").click(function () {
            let forma = $(this).val();

            if (forma == 1) {
                $("#formBlog").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formActor").fadeIn('slow');
            }

            if (forma == 2) {
                $("#formActor").hide('fast');
                $("#formBlog").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formGenre").fadeIn('slow');

            }

            if (forma == 3) {
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formBlog").fadeIn('slow');

            }

            if (forma == 4) {
                $("#formBlog").hide('fast');
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formMovie").fadeIn('slow');

            }

            if (forma == 5) {
                $("#formBlog").hide('fast');
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formSeries").fadeIn('slow');

            }

            if (forma == 6) {
                $("#formBlog").hide('fast');
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formDirector").fadeIn('slow');

            }

            if (forma == 7) {
                $("#formBlog").hide('fast');
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formCat").hide('fast');
                $("#formProducer").fadeIn('slow');

            }

            if (forma == 8) {
                $("#formBlog").hide('fast');
                $("#formActor").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").fadeIn('slow');

            }
        })
    }
}