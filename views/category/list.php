<div class="starter-template">
    <?php if (isset($data['category_show']))  : ?>
        <h2>Категории новостей</h2>
        <ul class="show-unstyled">
            <?php foreach ($data['category_show'] as $key => $value): ?>
                <li><a href="/category/show/<?= $key; ?>"><?= $value; ?></a></li>
            <?php endforeach; ?>
        </ul>

    <?php else : ?>
        <h2><?= $data['category'][0]['category_name']; ?></h2>
        <?php for ($i = 0; $i < count($data['category']); $i++) : ?>
            <ul class="show-unstyled">
                <li>
                    <a href="/news/show/<?= $data['category'][$i]['id_news']; ?>"><?= $data['category'][$i]['title_news']; ?></a>
                </li>
            </ul>
        <?php endfor; ?>

    <?php endif; ?>
</div>
