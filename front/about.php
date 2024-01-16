<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JavaScript 和 jQuery（下拉式選單所需） -->
    <script src="./js/jquery-1.9.1.min.js"></script>
</head>
<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-6 d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-dark text-left fw-bolder">我們的故事</h2>
            <br>
            <br>
            <?php
                $about = $About->find(['id' => 1]);
                $storyWithBreaks = nl2br($about['story']);
                $itemWithBreaks = nl2br($about['item']);
            ?>
            <div class="w-75">
                <p class="text-dark text-left lh-lg fs-6"><?=$storyWithBreaks;?></p>
            </div>
        </div>
        <div class="col-6 about-img"></div>
    </div>
</div>
<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-6 item-img"></div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center">
            <h3 class="text-dark text-center fw-bolder"><?=$itemWithBreaks;?></h3>
            <!-- <p class="text-dark text-center"></p> -->
        </div>
    </div>
</div>