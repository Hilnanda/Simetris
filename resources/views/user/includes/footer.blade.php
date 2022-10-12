<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Products</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Pricing</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Send Us A Note</h2>
                    <form action="add-message" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="message_nama" class="form-control footer-input margin-b-20" placeholder="Name" required>
                        <input type="email" name="message_email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                        <textarea class="form-control footer-input margin-b-30" name="message_text" rows="6" placeholder="Message" required></textarea>
                        <input type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" >
                    </form>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="img/logo.png" alt="Asentus Logo">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>