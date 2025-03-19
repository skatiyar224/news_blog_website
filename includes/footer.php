<footer class="footer-area pt-5 pb-4" style="background-color: #131E29; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.png" height="65" alt="Vault News Logo">
                </a>
                <p class="mt-3">
                    Vault News delivers the latest, unbiased, and reliable news from around the globe. Stay updated with breaking news, politics, crime, business, technology, entertainment, and sports—all in one place!
                </p>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <h5 class="mb-3">Health</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Healthy Living</a></li>
                    <li><a href="#" class="text-light">Medical Research</a></li>
                    <li><a href="#" class="text-light">Children’s Health</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <h5 class="mb-3">Real Estate</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Market Trends</a></li>
                    <li><a href="#" class="text-light">Buying Guide</a></li>
                    <li><a href="#" class="text-light">Commercial Spaces</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <h5 class="mb-3">Politics</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">U.S.</a></li>
                    <li><a href="#" class="text-light">World</a></li>
                    <li><a href="#" class="text-light">Elections</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <h5 class="mb-3">Follow Us</h5>
                <div class="d-flex">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 border-top pt-3">
            <p>Copyright &copy; <a href="index.php" class="text-light">Vault News</a> All Rights Reserved, 
                <?php echo date("Y"); ?>.</p>
        </div>
    </div>
</footer>

<!-- Google Translate -->
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<style>
    .goog-logo-link { display: none !important; }
    .goog-te-gadget { color: transparent !important; }
    .goog-te-gadget .goog-te-combo {
        padding: 8px;
        background: #eeee;
        color: #000;
        border-radius: 5px;
    }
    #google_translate_element {
        text-align: center;
        margin-top: 15px;
    }
    a.text-light:hover {
        color: #f8c146 !important;
        text-decoration: none;
    }
    
    @media (max-width: 768px) {
        .footer-area .col-lg-2 {
            text-align: center;
        }
        .footer-area .col-lg-4 {
            text-align: center;
        }
        .footer-area .d-flex {
            justify-content: center;
        }
    }
</style>