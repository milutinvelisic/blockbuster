<?php

function getAllBlogs(){
    return executeQuery("SELECT *, idBlog as blog_id FROM blog");
}

function getCommentsForBlog($blog_id){
    global $conn;

    try{
        $stmt = $conn->prepare("SELECT * FROM comments c inner join blog b on c.idBlog = b.idBlog inner join users u on u.idUser = c.idUser where b.idBlog = ?");
        $stmt->execute([$blog_id]);
        
        if($stmt){
            $comments = $stmt->fetchAll();
            return $comments;
        }
        
    }catch(PDOException $ex){
        echo $ex->getMessage();
    }

}

// function getUserForComment($user_id){
//     global $conn;

//     try{
//         $stmt = $conn->prepare("SELECT * from users u inner join comments c on u.idUser = c.idUser where u.idUser = ?");
//         $stmt->execute([$user_id]);

//         if($stmt){
//             $user = $stmt->fetch();
//             var_dump($user);
//             return $user;
//         }
//     }catch(PDOException $ex){
//         echo $ex->getMessage();
//     }
// }

function getOneBlog($blog_id){
    global $conn;

    try{
        $stmt = $conn->prepare("SELECT * FROM blog where idBlog = ?");
        $stmt->execute([$blog_id]);
        $blog = $stmt->fetch();
        

        return $blog;
    }catch(PDOExceptoin $ex){
        echo $ex->getMessage();
    }
}

function insertComment($message, $date, $idUser, $idBlog){
    global $conn;

    $stmt = $conn->prepare("INSERT INTO comments values(null, ?, ?, ?, ?)");
    $stmt->execute([$message, $date, $idUser, $idBlog]);

    if($stmt){
        http_response_code(201);

        try{
            $comment = getCommentsForBlog($idBlog);
            // var_dump($comment);

            return $comment;
        }catch(PDOExceptoin $ex){
            echo $ex->getMessage();
        }
    }else{
        http_response_code(400);
    }
}

function PPNumberBlog(){

    global $offset;

    $offset = 4;

    $numberOfBlog = executeQuery("SELECT count(*) as PPNumber from blog");
    $numberOfBlogs = $numberOfBlog[0]->PPNumber;

    $PPNumber = ceil($numberOfBlogs/$offset);

    return $PPNumber;
}