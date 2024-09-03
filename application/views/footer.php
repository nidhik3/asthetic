<style>
    .fs , .fs:hover{
        color: white ;
    }
</style>
<!-- ======= Footer ======= -->
<section class="space" style="background-color: black; color: white;">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-12 text-center">
                <a href="Main" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"  style="height:5vh;" >
                    ENCOME</a>
            </div>
        </div>
        <div class="row pt-3 d-flex justify-content-around">
            <div class="col-md-6">
            <ul class="d-flex justify-content-evenly">
                <!-- <li><a class="nav-link fs scrollto active" href="Main">Home</a></li> -->
                <li><a class="nav-link fs scrollto" href="">Solutions</a></li>
                <li><a class="nav-link fs scrollto" href="">Cases</a></li>
                <li><a class="nav-link fs scrollto " href="">Blogs</a></li>
                <li><a class="nav-link fs scrollto" href="">Pricing</a></li>
                <li><a class="nav-link fs scrollto" href="">About</a></li>
                <li><a class="nav-link fs scrollto" href="Contact">Contact</a></li>
              </ul>
            </div>
        </div>
    </div>



    

</section>






<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


<!-- banner image  -->
 <script>
  
 </script>
<!-- banner image  -->


<!-- Slider feedback -->
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      speed: 5000, // Speed of the sliding effect
      autoplay: {
        delay: 0, // No delay between transitions
        disableOnInteraction: false, // Keep sliding even when interacted
      },
      loopAdditionalSlides: 3, // Helps with continuous looping
      freeMode: true, // Enables continuous scrolling
      freeModeMomentum: false, // Disables momentum after releasing scroll
    });
  </script>
  
  
<!-- Slider -->


<!-- grey about -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
      const section = document.querySelector("#about");
      const textElements = section.querySelectorAll(".row, .h, .black");
  
      const observer = new IntersectionObserver((entries, observer) => {
          entries.forEach((entry) => {
              if (entry.isIntersecting) {
                  textElements.forEach((el, index) => {
                      setTimeout(() => {
                          el.classList.add("visible");
                      }, index * 100); // Faster delay between elements
                  });
                  observer.unobserve(section); // Stop observing after the effect is applied
              }
          });
      }, { threshold: 0.1 });
  
      observer.observe(section);
  });
  </script>
  
  
<!-- grey about -->

<!-- bannertext -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll('section'); // Select all sections or specify as needed
    
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const textElements = entry.target.querySelectorAll('.hiddenT');
                    textElements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add("visible");
                        }, index * 100); // Faster delay between elements
                    });
                    observer.unobserve(entry.target); // Stop observing after the effect is applied
                }
            });
        }, { threshold: 0.1 });
    
        sections.forEach(section => {
            observer.observe(section);
        });
    });
    </script>
    
<!-- bannertext -->


<!-- insight text -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const rows = document.querySelectorAll('.row'); // Select all rows or specify as needed
    
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const textElements = entry.target.querySelectorAll('.hiddenL');
                    textElements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add("visible");
                        }, index * 150); // Adjust delay as needed
                    });
                    observer.unobserve(entry.target); // Stop observing after the effect is applied
                }
            });
        }, { threshold: 0.1 });
    
        rows.forEach(row => {
            observer.observe(row);
        });
    });
    </script>
    
<!-- insight text -->

