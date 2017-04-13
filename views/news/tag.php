<div class="starter-template" style="min-height:300px; ">
    <?php if (!isset($data['tags'][0]['id_news'])) : ?>
        <ul class="show-unstyled">
            <?php foreach ($data['tags'] as $key => $value): ?>
                <li><a href="/news/tag/<?= $key; ?>"><?= $value ?> </a></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <ul class="show-unstyled">
            <?php foreach ($data['tags'] as $key => $value): ?>
                <li><a href="/news/show/<?= $value['id_news']; ?>"><?= $value['title_news'] ?> </a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</div>