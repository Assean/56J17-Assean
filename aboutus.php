<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 關於我們</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="by/css/about.css">
</head>
<body>
    
<?php include_once "header.php";?>
<div id="main-content" class='container text-center pt-3' style='height:800px'>
        <h2>AboutUS - 關於我們</h2>
        <hr>
        <!-- https://getbootstrap.com/docs/4.5/components/card/ -->
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="aboutImg" src="./img/about_img1.jpeg" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <img class="aboutImg"  src="./img/about_img2.jpeg" alt="">
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>

<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>