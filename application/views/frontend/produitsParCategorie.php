<?php $title = "Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>

<div>
    <div class="row wy-text-center">
        <div class="col-6 offset-4">
            <select name="" id="categorie">
                <?php
                foreach ($listeCategorie as $categorie) {
                ?>
                    <option value=" <?= $categorie->id ?>"><?= $categorie->nom ?></option>
                <?php
                }
                ?>
            </select>
            <button onclick="getCategorie()">Filtrer</button>
        </div>

    </div>
</div>




<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Categorie</th>
                <th scope="col">Prix unitaire</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeProduit as $produit) { ?>
                <tr>
                    <th scope="row"><?= $produit->id ?></th>
                    <td><?= $produit->nom ?></td>
                    <td><?= $produit->idCategorie ?></td>
                    <td><?= $produit->prixUnitaire ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>

<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>
<script>
    $(document).ready(function() {
        $.ajax({
                //L'URL de la requête
                url: "une/url/au/choix",

                //La méthode d'envoi (type de requête)
                method: "GET",

                //Le format de réponse attendu
                dataType: "json",
            })
            //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
            /*On peut par exemple convertir cette réponse en chaine JSON et insérer
             * cette chaine dans un div id="res"*/
            .done(function(response) {
                let data = JSON.stringify(response);
                $("div#res").append(data);
            })

            //Ce code sera exécuté en cas d'échec - L'erreur est passée à fail()
            //On peut afficher les informations relatives à la requête et à l'erreur
            .fail(function(error) {
                alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
            })

            //Ce code sera exécuté que la requête soit un succès ou un échec
            .always(function() {
                alert("Requête effectuée");
            });
    });
</script>

<script>
    function getCategorie() {
        var select = document.getElementById('categorie');
        var value = select.options[select.selectedIndex].value;
        console.log(value);
    }
</script>
<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>