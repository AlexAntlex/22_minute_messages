<style>
    .truncate {
    white-space: nowrap; /* Текст не переносится */
    overflow: hidden; /* Обрезаем всё за пределами блока */
    text-overflow: ellipsis; /* Добавляем многоточие */
   }
</style>

<main>
    <?php $articles = array_chunk($articles, 3); ?>

    <section id="gallery">
    <div class="container">
        <?php foreach ($articles as $items): ?>
                <div class="row -lg-4 mb-4">
                    <?php foreach ($items as $row): ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="<?=$row['img_path']?>" alt="" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">time: <?=$row['dt']?></p>
                                    <h5 class="card-title"><?=$row['title']?></h5>
                                    <p class="card-text truncate"><?=$row['content']?></p>
                                    <a href="<?BASE_URL?>message/<?=$row['id']?>" class="btn btn-outline-success btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
        <? endforeach; ?>
    </div>              
    </section>
</main>