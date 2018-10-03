<article class="col-4 miniature">
    <a href="photo.php?id=<?php echo $photo["id"]; ?>">
        <img src="uploads/<?php echo $photo["image"]; ?>" alt="mini" title="mini">
        <p class="likes"><?php echo $photo["nb_likes"]; ?> likes</p>
    </a>
    <div class="infos">
        <h3>
            <?php echo $photo["titre"]; ?>
            <a href="categorie.php?id=<?php echo $photo["categorie_id"]; ?>">
                #<?php echo $photo["categorie"]; ?>
            </a>
        </h3>

        <!-- Affichage des tags -->
        <?php $liste_tags = getAllTagsByPhoto($photo["id"]); ?>
        <?php if (count($liste_tags) > 0) : ?>
            <p>
                <?php foreach ($liste_tags as $tag) : ?>
                    <a href="tag.php?id=<?php echo $tag["id"]; ?>">
                        # <?php echo $tag["titre"]; ?>
                    </a>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>

        <p><?php echo $photo["date_creation_format"]; ?></p>
    </div>
</article>