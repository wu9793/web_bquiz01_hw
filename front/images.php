<br>
<h2 class="">校園映象區</h2>
<br>
<div class="card-group row">

    <?php
    $imgs = $Image->all(['sh' => 1]);

    foreach ($imgs as $idx => $img) {
    ?>
        <div class="col-4">
            <div id="ssaa<?= $idx; ?>" class="card d-flex p-2 pb-0 rounded-4 border-0">
                <img src="./img/<?= $img['img']; ?>" class="card-img-top rounded-4 card-img">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>