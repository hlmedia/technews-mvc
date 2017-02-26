<?php
    $params         = $this->getParams();
    $article        = $params['article'];
    $suggestions    = $params['suggestions'];
    //print_r($suggestions);
?>

<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <!--post-detail-->
        <article class="post-detail">
            <h1><?= $article->getTITREARTICLE(); ?></h1>
            <div class="meta-post">
                <a href="#">
                    <?= $article->getAuteurObj()->getNOMCOMPLET(); ?>
                </a>
                <em></em>
                <span>
                    <?= $article->getDATECREATIONARTICLE(); ?>
                </span>
            </div>

            <?= $article->getCONTENUARTICLE(); ?>
           
            <h5 class="text-right font-heading"><strong><?= $article->getAuteurObj()->getNOMCOMPLET(); ?></strong> </h5>

        </article>
        <!--social-detail-->
        <div class="social-detail">
            <span>   Partagez notre article</span>

            <ul class="list-social-icon">
                <li>
                    <a href="#" class="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="google">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="youtube">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="rss">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>

            </ul>
        </div>

        <!--related post-->
        <div class="detail-caption">
            <span>  DANS LA MEME CATEGORIE</span>
        </div>
        <section class="spotlight-thumbs spotlight-thumbs-related">
            <div class="row">
                <?php foreach($suggestions as $suggestion) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="#">
                                    <img alt="" src="http://localhost/POO/technews/public/images/product/<?= $suggestion->getFEATUREDIMAGEARTICLE(); ?>">
                                </a>
                                <a href="#" class="cate-tag"><?= $suggestion->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
                            </div>
                            <h3><a href="#"><?= $suggestion->getTITREARTICLE(); ?></a></h3>
                            <div class="meta-post">
                                <a href="#">
                                    <?= $suggestion->getAuteurObj()->getNOMCOMPLET(); ?>
                                </a>
                                <em></em>
                                <span>
                                    <?= $suggestion->getDATECREATIONARTICLE(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <?php include SIDEBAR_SITE; ?>
   
</div>