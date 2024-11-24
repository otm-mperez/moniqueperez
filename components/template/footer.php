
    <footer id="site-footer">
      <section class="upper">
        <div class="content">
          <div class="col">
            <img class="footer-logo" src="./assets/img/logo.svg" alt="Monique Perez Logo">
            <p>Thanks for your interest. Don’t hesitate to connect if I can support your goals.</p>
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <!-- <li><a href="#"></a></li> -->
            </ul>
          </div>
          <div class="col">
            <h2 class="eyebrow">Selected Clients</h2>
            <ul>
              <li>ORIGIN</li>
              <li>Poland Spring</li>
              <li>Deer Park</li>
              <li>Saratoga</li>
              <li>Eco Style</li>
              <li>Cameo</li>
              <li>Banfield</li>
              <li>Discovery Channel</li>
              <li>Spectrum</li>
              <li>Publix</li>
              <li>Medical Mutual</li>
            </ul>
          </div>
          <div class="col">
            <h2 class="eyebrow">Services</h2>
            <ul>
              <li>Discovery</li>
              <li>User Research</li>
              <li>Web Architecture + Strategy</li>
              <li>Web Development</li>
              <li>Project Planning</li>
              <li>Content Strategy</li>
              <li>UX Design</li>
              <li>UI Design</li>
              <li>Graphic Design/Visual Design</li>
              <li>Design Systems</li>
              <li>Prototyping</li>
              <li>Technical Design</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="lower">
        <div class="center">
          <p>Designed using Figma and coded with HTML, SCSS, JS, PHP by Monique Perez.</p>
        </div>
      </section>
    </footer>

    <script type="text/javascript">

    // Observer for content wraps
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('appear');
        } else {
          entry.target.classList.remove('appear');
        }
      });
    });

    const content = document.querySelectorAll('.content');
    content.forEach((el) => observer.observe(el));


    // Observer for features
    const fObserver = new IntersectionObserver((slides) => {
      slides.forEach((slide) => {
        if (slide.isIntersecting) {
          slide.target.classList.add('slide-in');
        } else {
          slide.target.classList.remove('slide-in');
        }
      });
    });

    const feature = document.querySelectorAll('.animate');
    feature.forEach((el) => fObserver.observe(el));

    </script>

  </body>
</html>
