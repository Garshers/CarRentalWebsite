(function header() {
    document.getElementById('header').innerHTML = `
    <div id="header-frame" class="header-frame">
        <div class="leftBox">
            <img class="responsive-image" src="images/icon.png" alt="Icon">
        </div>
        <div class="rightBox">
            <div class="menuButton" onclick="window.location.href='SignLog.php';">
                <div class="menuText">Sign In / Log In</div>
            </div>
            <div class="menuButton" onclick="window.location.href='Booking.php';">
                <div class="menuText">Booking</div>
            </div>
            <div class="menuButton" onclick="window.location.href='CarPortfolio.php';">
                <div class="menuText">Car Portfolio</div>
            </div>
            <div class="menuButton" onclick="window.location.href='MainPage.php';">
                <div class="menuText">Home</div>
            </div>
        </div>
    </div>`;
})();

(function footer() {
    document.getElementById('footer').innerHTML = `
    <div class="footer-frame">
        <div class="box1-3">
                <div class="footerText">+48 222 111 555</div>
                <div class="footerText">The helpline is available from Monday to Friday, from 9:00 AM to 9:00 PM.</div>
            </div>
            <div class="box1-3">
                <div class="footer-mainText">Customer Service Office</div>
                <img class="responsive-image" src="images/icon.png">
            </div>
            <div class="box1-3">
                <div class="footerText">Carental-contact@Carental.pl</div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="footerCopyright">© 2024 Carental. All rights reserved</div>
        </div>
    </div>`;
})();

window.addEventListener('scroll', function () {
    const header = document.getElementById('header-frame');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});