<?php
$name = 'The Playbook';
$title = $name . ' Project';
$handle = 'dime-playbooks';
$tags = ['UX Design', 'UI Design', 'Consulting', 'Information Architecture'];

$desc = 'Nonprofit looking to reformat a popular healthcare resource for an improved user experience.';

$org = 'Digital Medicine Society';
$industry = 'Healthcare, Technology, Nonprofit';
$role = 'UX/UI Designer, Consultant';
$tools = 'Figma, Photoshop, Miro, Asana';
$year = '2004';

$discUrl = 'https://www.figma.com/deck/GfZgTTwTWgYpNH0y8iNIhw/DiMe-Playbooks-Recommendation?node-id=1-660&t=u3qBZXllUDBw96QW-1';
$uxUrl = 'https://www.figma.com/board/VlHB7P77n6i6so4scjg38n/DiMe-User-Story-Mapping?node-id=0-1&t=vucKYVXzHsvbHnMR-1';
$uiUrl = 'https://www.figma.com/proto/zenrm0zEyPDNGaiAFsUamQ/DiMe?page-id=1024%3A81&node-id=1107-121&node-type=frame&viewport=2520%2C-17868%2C0.46&t=7GQX9oN09R3TRAfd-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1129%3A974&show-proto-sidebar=1';
$liveUrl = '';

$nextName = 'Frutitas Website';
$nextUrl = 'project-frutitas-website.php';
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
      <p>The <a href="//dimesociety.org" target="_blank">Digital Medicine Society (DiMe)</a> is a nonprofit organization that aims to improve healthcare through better use and development of technology. I support their various efforts with UX/UI design and consulting on a contract/project basis.</p>
      <p>They have a popular, multi-volume resource called “The Playbook” that provides insights, best practices, and guidance for different segments of healthcare.</p>
      <p>Up to the present, they have released each volume using a deck presentation format. Before launching their upcoming volume on Pediatric Medicine, their Vice President of Technology reached out to get my thoughts. She was looking for insights to see if they were using the best format to display The Playbooks in, and if not, explore the alternative options for the upcoming and future playbooks.</p>
    </div>
  </section>

  <!-- Phases -->
  <!-- Discovery -->
  <section id="project-discovery">
    <div class="content split inverse">

      <div class="col">
        <h2 class="eyebrow">Setting the Stage</h2>
        <h3 class="section-title">Discovery</h3>
        <p>I initially engaged by auditing the current landscape, reviewing the previously released playbooks, and metrics from Google Analytics and the organization’s alternative tracking tools. I reviewed an early, work-in-progress copy of the upcoming playbook. I also began creating personas to get an idea of the different user types. From there, I explored alternative formats to present the playbooks.</p>
        <p>I discovered that by redirecting to a third-party tool (like Google Slides) or presenting the playbooks in a PDF format, there were gaps in the analytics; the analytics could not track what users were viewing in those formats and for how long. Additionally, content was being restricted and organized by what could fit on the slides. Finally another major point was that users were prescribed to read content in a linear, sequential path; unable to easily move around to locate relevant content.</p>
        <p>I outlined those and other findings along with my recommendations using Figma Slides then presented this to the DiMe team, providing them with the insights needed to make an informed decision for the best format to use going forward.</p>
        <a class="button primary" href="<?=$discUrl?>" target="_blank">View Recommendations</a>
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
        <p>With DiMe now on board to switch to a web-based format, it was now time to define the user journey, outline user stories, prioritize features, and work on the wireframes.</p>
        <p>Using FigJam, I laid out the personas, the user flow, and user stories in collaboration with their technical manager and product owner. </p>
        <p>Working within constraints, I laid out the initial base for the wireframes in Figma and worked with an internal resource to expand on it with my review and feedback for guidance to improve the user experience.</p>
        <a class="button primary" href="<?=$uxUrl?>" target="_blank">View UX Research</a>
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
        <p>Taking the structure of the wireframes, I worked on the visual design and made an interactive prototype that could be used for internal demonstrations and user testing. I made some design decisions to push the UX forward.</p>
        <p>To start, I setup the design file in Figma by translating their brand guidelines to create a baseline of reusable, easy-to-update typography, color, and effect styles. Additionally, I sourced the icons and imagery, modifying/optimizing them as needed.</p>
        <p>Referring to the wireframes, I created a few interactive components with variants and states that could be used throughout the design. Next, I focused on information architecture along with the needs and wants of the user to thoughtfully layout the design, providing them with the information they needed and a seamless way to move through the resource.</p>
        <p>I laid out 3 design prototypes for internal stakeholder review and user testing with the goal of testing visuals, functionality, and development feasibility.</p>
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
        <h2 class="eyebrow">Current State + Next Steps</h2>
        <h3 class="section-title">Development Handoff</h3>
        <p>Upon design completion, review and approval, I handed off a Figma file with web-optimized digital assets and provided a walkthrough for development.</p>
        <p>Development is currently underway but once the build is complete, I will perform a design QA, then additional user testing. After handoff, I do not disengage; I stay connected for additional support, testing, and learning.</p>
        <!-- <a class="button primary" href="<?php //echo $liveUrl ?>" target="_blank">View Live Site</a> -->
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

  <section id="pagination" class="latte">
    <div class="content split">
      <div class="col left">
        <!-- <a href="<?=$prevUrl?>">
          <span class="eyebrow blue">Previous Project</span>
          <p><?php //echo $prevName?></p>
        </a> -->
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
