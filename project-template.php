<?php
$name = 'Template';
$title = $name . ' Project';
$handle = '#';
$tags = ['1', '2', '3', '4'];

$desc = '#';

$org = '#';
$industry = '#';
$role = '#';
$tools = '#';
$year = '#';

$discUrl = '#';
$uxUrl = '#';
$uiUrl = '#';
$liveUrl = '#';

$nextName = '#';
$nextUrl = '#';
$prevName = '#';
$prevUrl = '#';
?>

<?php include "components/template/header.php"; ?>

<main>
  <!-- Intro -->
  <section id="project-intro">
    <div class="content split">
      <div class="col">
        <h2 class="section-title"><?=$name?></h2>
        <ul class="tag-group">
          <?php foreach ($tags as $tag): ?>
            <li class="tag"><?=$tag?></li>
          <?php endforeach; ?>
        </ul>
        <p class="emphasis"><?=$desc?></p>
        <p>
          <span class="medium">Organization:</span> <?=$org?><br>
          <span class="medium">Industry:</span> <?=$industry?><br>

          <span class="medium">Role:</span> <?=$role?><br>
          <span class="medium">Tools:</span> <?=$tools?><br>
          <span class="medium">Year:</span> <?=$year?>
        </p>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-intro.png" alt="Screenshot of <?=$name?> overview">
      </div>
    </div>
  </section>

  <!-- Background -->
  <section id="about" class="light-blue">
    <div class="content full center">
      <h2 class="eyebrow">A Little Content</h2>
      <h3 class="section-title">Project Background</h3>
      <p>##</p>
      <p></p>
    </div>
  </section>

  <!-- Phases -->
  <!-- Discovery -->
  <section id="project-discovery">
    <div class="content split inverse">

      <div class="col">
        <h2 class="eyebrow">Setting the Stage</h2>
        <h3 class="section-title">Discovery</h3>
        <p>##</p>
        <p></p>
        <p></p>
        <a class="button primary" href="<?=$discUrl?>" target="_blank">View Discovery Work</a>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-discovery.png" alt="Screenshot of <?=$name?> discovery">
      </div>

    </div>
  </section>

  <!-- UX -->
  <section id="project-ux" class="cream">
    <div class="content split">

      <div class="col">
        <h2 class="eyebrow">Defining the Flow + Structure</h2>
        <h3 class="section-title">User Experience</h3>
        <p>##</p>
        <p></p>
        <p></p>
        <a class="button primary" href="<?=$uxUrl?>" target="_blank">View UX Design</a>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-ux.png" alt="Screenshot of <?=$name?> UX">
      </div>

    </div>
  </section>

  <!-- UI -->
  <section id="project-ui">
    <div class="content split inverse">

      <div class="col">
        <h2 class="eyebrow">Layering the Visuals</h2>
        <h3 class="section-title">User Interface Design</h3>
        <p>##</p>
        <p></p>
        <p></p>
        <a class="button primary" href="<?=$uiUrl?>" target="_blank">View UI Design</a>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-ui.png" alt="Screenshot of <?=$name?> UI">
      </div>

    </div>
  </section>

  <!-- DEV -->
  <section id="project-dev" class="cream">
    <div class="content split">

      <div class="col">
        <h2 class="eyebrow">The Build</h2>
        <h3 class="section-title">Development</h3>
        <p>##</p>
        <p></p>
        <p></p>
        <a class="button primary" href="<?=$liveUrl?>" target="_blank">View Live Site</a>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-dev.png" alt="Screenshot of <?=$name?> development">
      </div>

    </div>
  </section>

  <!-- Summary -->
  <section id="project-summary" class="light-blue">
    <div class="content center">
      <h2 class="eyebrow">What Did We Learn</h2>
      <h3 class="section-title">Project Summary</h3>
      <p>##</p>
    </div>
  </section>

  <!-- Pagination -->
  <section id="pagination" class="latte">
    <div class="content split">
      <div class="col left">
        <a href="<?=$prevUrl?>">
          <span class="eyebrow blue">Previous Project</span>
          <p><?=$prevName?></p>
        </a>
      </div>
      <div class="col right">
        <a href="<?=$nextUrl?>">
          <span class="eyebrow blue">Next Project</span>
          <p><?=$nextName?></p>
        </a>
      </div>
    </div>
  </section>
</main>

<?php include "components/template/footer.php"; ?>
