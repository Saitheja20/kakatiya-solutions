<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <p>&copy; 2025 Your Website Name. All Rights Reserved.</p>
        </div>
        <div class="footer-middle">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <ul>
                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // for making menu visible when we click on the menubar 
    // AOS.init();
    const menuToggle = document.getElementById('menu-toggle');
    const menushow = document.getElementById('menu');
    const menulist = document.getElementById('menulist');

    menuToggle.addEventListener('change', function () {
        if (this.checked) {
            //  menushow.classList.add('animate__animated', 'animate__fadeInRight');
            console.log('Checkbox is checked!');
            console.log(menulist);
            console.log(menushow);
            menulist.classList.remove('animate__animated', 'animate__fadeOutRight');
            menulist.classList.add('animate__animated', 'animate__zoomIn', 'animate__delay-1s');
            menushow.style.display = 'block';
            //  menulist.classList.add('animate__animated', 'animate__zoomIn', 'animate__delay-800ms');
        } else {
            console.log('Checkbox is unchecked!');
            console.log(menulist);  // Debugging step
            console.log(menushow);
            // Remove existing animations
            menulist.classList.remove('animate__animated', 'animate__zoomIn', 'animate__delay-1s');
            menushow.classList.remove('animate__animated', 'animate__fadeInRight');
            // Add the fadeOutRight animation class to menulist
            menulist.classList.add('animate__animated', 'animate__fadeOutRight');
            setTimeout(function () {
                  menushow.classList.add('animate__animated', 'animate__fadeOutRight');
            }, 200);
          
            console.log('Added anime class!');
            
            // Wait for the animation to finish before hiding the menu
             //menulist.addEventListener('animationend', function () {
                // After animation ends, hide the menu
                // menushow.style.display = 'none';
                
                // Remove the animation classes to allow future animations
                setTimeout(function () {
                menulist.classList.remove('animate__animated', 'animate__fadeOutRight');
            }, 500);
                // menulist.classList.remove('animate__animated', 'animate__fadeOutRight');
                console.log("removed the fadeout")
                setTimeout(function () {
                 menulist.classList.add('animate__animated', 'animate__zoomIn', 'animate__delay-1s');
            }, 600);
                setTimeout(function () {
                menushow.classList.remove('animate__animated', 'animate__fadeOutRight');
            }, 800);
            setTimeout(function () {
                menushow.style.display = 'none';
                menushow.classList.add('animate__animated', 'animate__fadeInRight');
            }, 800);
            
            
                 console.log("added the animate zoomin")
             //});
        }
    });
</script>

    <!-- bootstrap Js library -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
           
