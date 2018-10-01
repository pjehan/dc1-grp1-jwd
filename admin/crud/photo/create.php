<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'une photo</h1>

<form action="create_query.php" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Catégorie</label>
        <select name="categorie_id" class="form-control">
            <option value="1">Montagne</option>
            <option value="2">Forêt</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tags</label>
        <select name="tag_ids" class="form-control" multiple>
            
        </select>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>