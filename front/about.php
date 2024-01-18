<br>
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