<div id="article" class="<?php echo $col; ?>">
  <div class="card">
    <a href="article/<?php echo $id; ?>"><img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/<?php echo $id; ?>.jpg" alt="<?php echo $img_alt; ?>"></a>
    <div class="card-body <?php echo strtolower($type) ?>-article">
      <a href="articles#<?php echo $type ?>" class="tag"><?php echo $type; ?></a>
      <h5 class="card-title"><?php echo $title ?></h5>
      <p class="card-text"><?php echo $desc; ?></p>
      <a href="article/<?php echo $id; ?>" class="link">Keep reading</a>
    </div>
  </div>
</div>
