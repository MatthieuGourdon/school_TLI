{include file='header.tpl'}

<?php include('../request.php'); ?>

<section>
        <div  class="center-div" id="bg-div">
            <form action="" method="post">
              <label for="keyword">Rechercher par mot-clé: </label>
              <input type="text" name="keyword" id="keyword" required>
              <input type="submit" value="Rechercher">
            </form>
        </div>
</section>

{include file='footer.tpl'}