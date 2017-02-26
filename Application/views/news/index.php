<?php
    $params     = $this->getParams();
    $articles   = $params['articles'];
    $categorie  = $params['categorie'];
    $spotlight  = $params['spotlight'];
?>

<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <div class="box-caption">
            <span>spotlight</span>
        </div>
        <!--sportlight-->
        <section class="owl-carousel owl-spotlight">
            <?php
                foreach($spotlight as $slide) :
            ?>
            <div>
                <article class="spotlight-item">
                    <div class="spotlight-img">
                        <img alt="" src="<?= SITE_URL ?>/public/images/product/<?= $slide->getFEATUREDIMAGEARTICLE(); ?>" class="img-responsive" />
                        <a href="#" class="cate-tag"><?= $slide->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
                    </div>
                    <div class="spotlight-item-caption">
                        <h2 class="font-heading">
                            <a href="<?= $slide->generateURL(); ?>">
                                <?= $slide->getTITREARTICLE(); ?>
                            </a>
                        </h2>
                        <div class="meta-post">
                            <a href="<?= $slide->generateURL(); ?>">
                                <?= $slide->getAuteurObj()->getNOMCOMPLET(); ?>
                            </a>
                            <em></em>
                            <span>
                                <?= $slide->getDATECREATIONARTICLE(); ?>
                            </span>
                        </div>
                        <?= $slide->getAccroche(); ?>
                    </div>
                </article>
            </div>            
            <?php endforeach; ?>
        </section>

        <!--spotlight-thumbs-->
        <section class="spotlight-thumbs">
            <div class="row">
                <?php foreach ($articles as $article) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="<?= $article->generateURL(); ?>">
                                    <img alt="" src="<?= SITE_URL ?>/public/images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>" />
                                </a>
                                <a href="#" class="cate-tag"><?= $article->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
                            </div>
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
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <?php include SIDEBAR_SITE; ?>

</div>