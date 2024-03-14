<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php")?>

<div class="homepage">
    <div class="container mb-3">
        <div class="content d-flex justify-content-between align-items-center mt-3">
            <? $mainRecipe = $data[1]; ?>
            <div class="main-content">
                <div class="card" style="width: 40rem;">
                    <a href="#">
                        <img src="/Public/uploads/recipes/<?echo $mainRecipe->getImgUrl() ?? "image.png" ; ?>" class="card-img-top" alt="Picture of meal" style="object-fit: cover; height:30rem">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><? echo $mainRecipe->getName() ?></h5>
                        <p class="card-text"><? echo $mainRecipe->getDescription() ?></p>
                        <a href="#" class="btn btn-primary">Get recipe</a>
                    </div>
                </div>
            </div>
            <?php array_shift($data); ?>
            <div class="nav-content">
                <? foreach ($data as $recipe):?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/Public/uploads/recipes/<?echo $recipe->getImgUrl()?>" class="card-img-bottom" alt="Picture of meal" style="object-fit: cover; height:12rem">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><? echo htmlspecialchars($recipe->getName());?></h5>
                                <p class="card-text"><? echo $recipe->getDescription()?></p>
                                <p class="card-text"><small class="text-muted">Date: <? echo $recipe->getTimestamp() ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>

<?php require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php"); ?>