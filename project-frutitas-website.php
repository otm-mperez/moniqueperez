<?php
$name = 'Frutitas Website';
$title = $name . ' Project';
$handle = 'frutitas-website';
$tags = ['UX Research', 'UI Design', 'Project Management', 'Information Architecture'];

$desc = 'New retail brand of fruit-infused water looking to build a new website to establish web presence.';

$org = 'Frutitas / BlueTriton Brands';
$industry = 'Retail, Consumer Goods';
$role = 'UX Engineer, UI Designer';
$tools = 'Figma, Photoshop, Drupal, Monday';
$year = '2023';

$discUrl = '';
$uxUrl = 'https://www.figma.com/board/oOGTLn0HhM4OPGBNfqwmA0/Frutitas-Visual-Sitemap?node-id=0-1&t=E9wgZdzZew96dzpZ-1';
$uiUrl = 'https://www.figma.com/proto/FMjMsiRdqikLxw6p6Qlnq4/Frutitas?node-id=0-1&node-type=canvas&viewport=-617%2C396%2C0.04&t=zsKrb3ciTEo7Kg7H-0&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=147%3A667';
$liveUrl = '//frutitas.com';

$nextName = '#';
$nextUrl = '#';
$prevName = 'The Playbooks';
$prevUrl = 'project-dime-playbook.php';
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
      <p><a href="<?=$liveUrl?>" target="_blank">Frutitas</a> is a new, developing brand in the portfolio of <a href="//www.bluetriton.com" target="_blank">BlueTriton Brands</a> (soon to be <a href="//www.primobrands.com" target="_blank">Primo Brands</a>). Frutitas was looking to establish their web presence by have a landing page designed and developed showcasing their product line, values, and showing where consumers can purchase the products.</p>
    </div>
  </section>

  <!-- Phases -->
  <!-- Discovery -->
  <section id="project-discovery">
    <div class="content split inverse">

      <div class="col">
        <h2 class="eyebrow">Setting the Stage</h2>
        <h3 class="section-title">Discovery</h3>
        <p>I began the project by reviewing the content the brand already had which included a brand book and product photography. The brand book outlined the branding, tone, typography, colors, some graphic elements, and personas which fed into the next phase.</p>
        <p>Additionally, the brand provided a creative brief with requirements for the new website. I used the requirements outlined in the brief, paired with my recommendations, to plan out steps using the organization’s project management tool, Monday. I brainstormed ideas, itemized needs, briefed the SEO team and copywriters to start the conversation on content development, and developed a timeline based on the brand’s desired launch date, factoring in the teams’ bandwidth.</p>
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
        <p>Using the creative brief, I began the UX phase by creating a visual sitemap, allowing me to visually layout out each required page, their connections to each other with a high-level content outline beneath each page. This served as a useful reference for the brand, SEO, copywriting, and creative teams.</p>
        <p>With the personas, typography, colors, graphic elements already defined in the brand-provided brand book, my next step was to create a wireframe to outline the more detailed structure for each page. Using Figma, I laid out the pages and sections to confirm all needs were captured from the brand’s perspective before starting on the design. This also helped with the planning identify content needs for creation.</p>
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
        <p>My next step was to translate the elements from the brand-provided brand book into a web style guide. I tested color combinations to ensure they met ADA AA level standards for web accessibility, defined how to pair colors, along with component-based styling.</p>
        <p>With the style guide complete, I set up the design file in Figma with typography, color, and effect styles for consistency, easy reuse, and efficient maintenance.</p>
        <p>From there, using graphic elements, lifestyle and product photography, I layered the visual design on the structure from the wireframes. Using components, variants, auto layout, and saved styles, I designed the pages responsively with reusable elements. Additionally, I made it an interactive prototype to show the desired interactions to all teams.</p>
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
        <p>Upon design completion, review and approval, I handed off a Figma file with digital assets, along with a walkthrough for development. The development was completed by a third-party team, built using Drupal.</p>
        <a class="button primary" href="<?=$liveUrl?>" target="_blank">View Live Site</a>
      </div>

      <div class="col">
        <img src="assets/img/pic-project-<?=$handle?>-dev.png" alt="Screenshot of <?=$name?> development">
      </div>

    </div>
  </section>

  <!-- Summary -->
  <!-- <section id="project-summary" class="light-blue">
    <div class="content center">
      <h2 class="eyebrow">What Did We Learn</h2>
      <h3 class="section-title">Project Summary</h3>
      <p>##</p>
    </div>
  </section> -->

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
        <!-- <a href="<?php //echo $nextvUrl?>">
          <span class="eyebrow blue">Previous Project</span>
          <p><?php //echo $nextName?></p>
        </a> -->
        </a>
      </div>
    </div>
  </section>
</main>

<?php include "components/template/footer.php"; ?>
