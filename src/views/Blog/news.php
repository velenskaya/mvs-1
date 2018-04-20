<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Company
                <strong>blog</strong>
            </h2>
            <hr>
        </div>
        <?
            foreach ($news as $article) {
        ?>
                <div class="col-lg-12 text-center">
                    <h2>Post Title
                        <br>
                        <small><?= date_format(date_create($article['created_at']), 'F j, Y') ?></small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="<?= $this->path('article', ['id' => $article['id']]) ?>" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
        <?
            }
        ?>
<!--        <div class="col-lg-12 text-center">-->
<!--            <ul class="pager">-->
<!--                <li class="previous"><a href="#">&larr; Older</a>-->
<!--                </li>-->
<!--                <li class="next"><a href="#">Newer &rarr;</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
</div>
