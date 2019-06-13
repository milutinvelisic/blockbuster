window.onload = function () {

    if ($("#pagination2 a")) {
        let paginacija = $("#pagination2 a");
        paginacija.click(function (e) {
            e.preventDefault();
            let id = $(this).data("id");
            $.ajax({
                url: "models/celebrities/pagination.php",
                method: "post",
                type: "json",
                data: {
                    id: id
                },
                success: function (actors) {
                    printActors(actors)
                },
                error: function (xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
        })
    }

    function printActors(actors) {
        let html = ''
        for (const a of actors) {
            html += `
            <div class="ceb-item">
                <a href="index.php?p=celebrities&id=${a.idActor}"><img src="assets/images/uploads/${a.actorSrcBig}" alt="${a.actorFirstName}"></a>
                <div class="ceb-infor">
                    <h2><a href="index.php?p=celebrities&id=${a.idActor}">${a.actorFirstName} ${a.actorLastName}</a></h2>
                    <!-- <span>actor, usa</span> -->
                </div>
            </div>`
        }

        $("#celebrities").html(html)
    }

    if ($("#pagination1 a")) {
        let paginacija = $("#pagination2 a");
        paginacija.click(function (e) {
            e.preventDefault();
            let id = $(this).data("id");
            $.ajax({
                url: "models/movies/pagination.php",
                method: "post",
                type: "json",
                data: {
                    id: id
                },
                success: function (movies) {
                    printMovies(movies)
                },
                error: function (xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
        })
    }

    function printMovies(movies) {
        let html = ''
        for (const m of movies) {
            html += `<div class="movie-item-style-2 movie-item-style-1">
                        <img src="assets/images/uploads/${m.mainCatInfoCoverPhoto}" alt="${m.mainCatInfoName}">
                        <div class="hvr-inner">
                            <a  href="index.php?p=movies&id=${m.idMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                        </div>
                        <div class="mv-item-infor">
                            <h6><a href="index.php?p=movies&id=${m.idMainCatInfo}">${m.mainCatInfoName}</a></h6>
                        </div>
                    </div>`
        }

        if ($("#movies")) {
            $("#movies").html(html)
        }
    }

    if ($("#pagination3 a")) {
        let paginacija = $("#pagination3 a");
        paginacija.click(function (e) {
            e.preventDefault();
            let id = $(this).data("id");
            $.ajax({
                url: "models/series/pagination.php",
                method: "post",
                type: "json",
                data: {
                    id: id
                },
                success: function (series) {
                    printSeries(series)
                },
                error: function (xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
        })
    }

    function printSeries(series){
        let html = ''

        for (const s of series) {
            html += `<div class="movie-item-style-2 movie-item-style-1">
                        <img src="assets/images/uploads/${s.mainCatInfoCoverPhoto}" alt="${s.mainCatInfoName}">
                        <div class="hvr-inner">
                            <a  href="index.php?p=movies&id=${s.idMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                        </div>
                        <div class="mv-item-infor">
                            <h6><a href="index.php?p=movies&id=${s.idMainCatInfo}">${s.mainCatInfoName}</a></h6>
                        </div>
                    </div>`
        }

        if ($("#series")) {
            $("#series").html(html)
        }
    }

    if ($("#pagination4 li a")) {
        let paginacija = $("#pagination4 li a");
        paginacija.click(function (e) {
            e.preventDefault();
            let id = $(this).data("id");
            $.ajax({
                url: "models/blog/pagination.php",
                method: "post",
                type: "json",
                data: {
                    id: id
                },
                success: function (data) {
                    console.log(data)
                    printBlogs(data)
                },
                error: function (xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
        })
    }

    function printBlogs(data){
        let html = ''

        for (const d of data) {
            html += `<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="blog-item-style-2">
                            <a href="index.php?p=blog&id=${d.idBlog}"><img src="assets/images/uploads/${d.blogCoverPhoto}" alt="${d.title}"></a>
                            <div class="blog-it-infor">
                                <h3><a href="index.php?p=blog&id=${d.idBlog}">${d.title}</a></h3>
                                <span class="time">${d.date}</span>
                                <p class="text-overflow">${d.textShort}</p>
                            </div>
                        </div>
                    </div>`
        }

        if($("#blog")){
            $("#blog").html(html)
        }
    }

    
}
$("#fav").click(function (e) {
    e.preventDefault()
})

function fav(id) {

    $.ajax({
        url: "models/favourites/favourites.php",
        method: "POST",
        type: "json",
        data: {
            id: id
        },
        success: function (data) {
            console.log(data)
            if (data) {
                toastr.success("Added to favourites!");
            }
        },
        error: function (xhr, status, msg) {
            toastr.warning(xhr.responseText)
        }
    })
}