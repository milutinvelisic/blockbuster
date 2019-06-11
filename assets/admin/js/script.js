window.onload = function () {

    if ($("#datatype")) {
        $("#datatype").change(function () {
            let forma = $(this).val();

            if(forma == 0){
                $("#formBlog").hide('fast');
                $("#formGenre").hide('fast');
                $("#formMovie").hide('fast');
                $("#formSeries").hide('fast');
                $("#formDirector").hide('fast');
                $("#formProducer").hide('fast');
                $("#formCat").hide('fast');
                $("#formActor").hide('fast');
            }
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

    if($("#showtype")){
        $("#showtype").change(function(){
            let forma = $(this).val()
            console.log(forma)

            if(forma == 0){
                $("#dataBlog").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataActor").hide('fast');
            }
            if (forma == 1) {
                $("#dataBlog").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataActor").fadeIn('slow');
            }

            if (forma == 2) {
                $("#dataActor").hide('fast');
                $("#dataBlog").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataDirector").fadeIn('slow');
                $("#dataProducer").fadeIn('slow');

            }

            if (forma == 3) {
                $("#dataActor").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataBlog").fadeIn('slow');

            }

            if (forma == 4) {
                $("#dataBlog").hide('fast');
                $("#dataActor").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataMovie").fadeIn('slow');

            }

            if (forma == 5) {
                $("#dataBlog").hide('fast');
                $("#dataActor").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").hide('fast');
                $("#dataSeries").fadeIn('slow');

            }

            if (forma == 8) {
                $("#dataBlog").hide('fast');
                $("#dataActor").hide('fast');
                $("#dataGenre").hide('fast');
                $("#dataMovie").hide('fast');
                $("#dataSeries").hide('fast');
                $("#dataDirector").hide('fast');
                $("#dataProducer").hide('fast');
                $("#dataCat").fadeIn('slow');
                $("#dataGenre").fadeIn('slow');

            }
        })
    }

    if($("#connecttype")){
        $("#connecttype").change(function(){
            let forma = $(this).val();

            if(forma == 0){
                $("#connectActorMS").hide("fast");
                $("#connectMSActor").hide("fast");
                $("#btnConnectActorMS").hide("fast");
                $("#connectGenreMS").hide("fast");
                $("#connectMSGenre").hide("fast");
                $("#btnConnectMSGenre").hide("fast");
                $("#connectCatMS").hide("fast");
                $("#connectMSCat").hide("fast");
                $("#btnConnectMSCat").hide("fast");
                $("#connectDirectorMS").hide("fast");
                $("#connectMSDirector").hide("fast");
                $("#btnConnectMSDirector").hide("fast");
                $("#connectProducerMS").hide("fast");
                $("#connectMSProducer").hide("fast");
                $("#btnConnectMSProducer").hide("fast");
            }

            if(forma == 1){
                $("#connectGenreMS").hide("fast");
                $("#connectMSGenre").hide("fast");
                $("#btnConnectMSGenre").hide("fast");
                $("#connectCatMS").hide("fast");
                $("#connectMSCat").hide("fast");
                $("#btnConnectMSCat").hide("fast");
                $("#connectDirectorMS").hide("fast");
                $("#connectMSDirector").hide("fast");
                $("#btnConnectMSDirector").hide("fast");
                $("#connectProducerMS").hide("fast");
                $("#connectMSProducer").hide("fast");
                $("#btnConnectMSProducer").hide("fast");
                $("#connectActorMS").fadeIn("slow");
                $("#connectMSActor").fadeIn("slow");
                $("#btnConnectActorMS").fadeIn("slow");
                $("#connectactorms").change(function(){
                    let form1 = $(this).val()
                    console.log(form1)
                    $("#connectmsactor").change(function(){
                        let form2 = $(this).val()
                        console.log(form2)
                        if((form1 && form2) != 0){
                            $("#btnConnectActorMS button").removeAttr("disabled")
                        }
                    })
                })
            }

            if(forma == 2){
                $("#connectActorMS").hide("fast");
                $("#connectMSActor").hide("fast");
                $("#btnConnectActorMS").hide("fast");
                $("#connectCatMS").hide("fast");
                $("#connectMSCat").hide("fast");
                $("#btnConnectMSCat").hide("fast");
                $("#connectDirectorMS").hide("fast");
                $("#connectMSDirector").hide("fast");
                $("#btnConnectMSDirector").hide("fast");
                $("#connectProducerMS").hide("fast");
                $("#connectMSProducer").hide("fast");
                $("#btnConnectMSProducer").hide("fast");
                $("#connectGenreMS").fadeIn("slow");
                $("#connectMSGenre").fadeIn("slow");
                $("#btnConnectMSGenre").fadeIn("slow");

                $("#connectgenrems").change(function(){
                    let form1 = $(this).val()
                    console.log(form1)
                    $("#connectmsgenre").change(function(){
                        let form2 = $(this).val()
                        console.log(form2)
                        if((form1 && form2) != 0){
                            $("#btnConnectMSGenre button").removeAttr("disabled")
                        }
                    })
                })
            }

            if(forma == 3){
                $("#connectActorMS").hide("fast");
                $("#connectMSActor").hide("fast");
                $("#btnConnectActorMS").hide("fast");
                $("#connectGenreMS").hide("fast");
                $("#connectMSGenre").hide("fast");
                $("#btnConnectMSGenre").hide("fast");
                $("#connectDirectorMS").hide("fast");
                $("#connectMSDirector").hide("fast");
                $("#btnConnectMSDirector").hide("fast");
                $("#connectProducerMS").hide("fast");
                $("#connectMSProducer").hide("fast");
                $("#btnConnectMSProducer").hide("fast");
                $("#connectCatMS").fadeIn("slow");
                $("#connectMSCat").fadeIn("slow");
                $("#btnConnectMSCat").fadeIn("slow");

                $("#connectcatms").change(function(){
                    let form1 = $(this).val()
                    console.log(form1)
                    $("#connectmscat").change(function(){
                        let form2 = $(this).val()
                        console.log(form2)
                        if((form1 && form2) != 0){
                            $("#btnConnectMSCat button").removeAttr("disabled")
                        }
                    })
                })
            }

            if(forma == 4){
                $("#connectActorMS").hide("fast");
                $("#connectMSActor").hide("fast");
                $("#btnConnectActorMS").hide("fast");
                $("#connectGenreMS").hide("fast");
                $("#connectMSGenre").hide("fast");
                $("#btnConnectMSGenre").hide("fast");
                $("#connectCatMS").hide("fast");
                $("#connectMSCat").hide("fast");
                $("#btnConnectMSCat").hide("fast");
                $("#connectProducerMS").hide("fast");
                $("#connectMSProducer").hide("fast");
                $("#btnConnectMSProducer").hide("fast");
                $("#connectDirectorMS").fadeIn("slow");
                $("#connectMSDirector").fadeIn("slow");
                $("#btnConnectMSDirector").fadeIn("slow");

                $("#connectdirectorms").change(function(){
                    let form1 = $(this).val()
                    console.log(form1)
                    $("#connectmsdirector").change(function(){
                        let form2 = $(this).val()
                        console.log(form2)
                        if((form1 && form2) != 0){
                            $("#btnConnectMSDirector button").removeAttr("disabled")
                        }
                    })
                })
            }

            if(forma == 5){
                $("#connectActorMS").hide("fast");
                $("#connectMSActor").hide("fast");
                $("#btnConnectActorMS").hide("fast");
                $("#connectGenreMS").hide("fast");
                $("#connectMSGenre").hide("fast");
                $("#btnConnectMSGenre").hide("fast");
                $("#connectCatMS").hide("fast");
                $("#connectMSCat").hide("fast");
                $("#btnConnectMSCat").hide("fast");
                $("#connectDirectorMS").hide("slow");
                $("#connectMSDirector").hide("slow");
                $("#btnConnectMSDirector").hide("slow");
                $("#connectProducerMS").fadeIn("slow");
                $("#connectMSProducer").fadeIn("slow");
                $("#btnConnectMSProducer").fadeIn("slow");

                $("#connectproducerms").change(function(){
                    let form1 = $(this).val()
                    console.log(form1)
                    $("#connectmsproducer").change(function(){
                        let form2 = $(this).val()
                        console.log(form2)
                        if((form1 && form2) != 0){
                            $("#btnConnectMSProducer button").removeAttr("disabled")
                        }
                    })
                })
            }
        }) 
    }    
}