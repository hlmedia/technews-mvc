<!--colright-->
<div class="col-md-4 col-sm-12">
    <!--tab popular-->
    <ul role="tablist" class="tab-popular">
        <li class="active">
            <a href="#tab1" role="tab" data-toggle="tab">
                DERNI&Egrave;RE PUBLICATIONS
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <ul class="list-news-popular">
                <?php
                    $lastArticles = $this->getLastArticles();
                    foreach ($lastArticles as $article) :
                ?>

                <li>
                    <a href="<?= $article->generateURL(); ?>">
                        <img alt="" src="<?= SITE_URL ?>/public/images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>">
                    </a>
                    <h3><a href="<?= $article->generateURL(); ?>"><?= $article->getTITREARTICLE(); ?></a></h3>
                    <div class="meta-post">
                        <a href="#">
                            <?= $article->getAuteurObj()->getNOMCOMPLET(); ?>

                        </a>
                        <em></em>
                        <span>
                            <?= $article->getDATECREATIONARTICLE(); ?>
                        </span>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- subcribe box-->
    <div class="subcribe-box">
        <h3>NEWSLETTER</h3>
        <p>Inscrivez-vous pour recevoir nos dernières publications.</p>
        <input type="text" placeholder="Votre Email..." />
        <button class="my-btn">Je m'inscris</button>
    </div>
    <!-- connect us-->
    <div class="connect-us">
        <div class="widget-title">
            <span>
                SUIVEZ-NOUS
            </span>
        </div>
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

    <!-- special post-->
    <div class="connect-us">
        <div class="widget-title">
            <span>
                En Avant
            </span>
        </div>
        <div class="list-special">
            <?php
                    $specialArticles = $this->getSpecialArticles();
                    foreach ($specialArticles as $article) :
                ?>
                    <article class="news-two-large">
                        <a href="<?= $article->generateURL(); ?>">
                            <img alt="" src="<?= SITE_URL ?>/public/images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>">
                        </a>
                        <h3><a href="<?= $article->generateURL(); ?>"><?= $article->getTITREARTICLE(); ?></a></h3>
                        <div class="meta-post">
                            <a href="#">
                                <?= $article->getAuteurObj()->getNOMCOMPLET(); ?>
                            </a>
                            <em></em>
                            <span>
                                <?= $article->getDATECREATIONARTICLE(); ?>
                            </span>
                        </div>
                    </article>

            <?php endforeach; ?>    
        </div>
    </div>
</div>