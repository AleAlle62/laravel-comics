<style>
    html {
        background-image: url(https://rare-gallery.com/uploads/posts/503306-architecture.jpg);
        background-size: cover;
    }
    h1 {
        align-items: center;
        text-align: center;
        margin-top: 150px;
        margin-left: -400px;
    }

    /* footer  */
    footer {
        background-image: url({{ asset('images/footer-bg.jpg') }});
        margin-top: 200px;
        /* padding: 60px 0; */
        height: 50%;
        display: flex;
        color: white;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .footer-text {
        background-color: #1c1c1c;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .social-icons {
        background-color: #1c1c1c;
    }

    .social-icons li {
        color: white;
        display: inline-block;
        margin-right: 10px;
    }

    .social-icons li a {
        color: #fff;
        font-size: 18px;
        padding: 10px;
        transition: all 0.3s ease-in-out;
    }

    .social-icons li a:hover {
        background-color: #fff;
        color: #1c1c1c;
        border-radius: 50%;
    }

    .footer-links {
        background-color: #1c1c1c;

        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-links li a {
        color: #fff;
        font-size: 14px;
        text-decoration: none;
        margin-bottom: 10px;
        display: block;
        transition: all 0.3s ease-in-out;
    }


    .footer form {
        margin-top: 20px;
    }

    .footer form input[type="email"] {
        width: 100%;
        padding: 12px 20px;
        margin-bottom: 10px;
        font-size: 14px;
        border: none;
        background-color: #2d2d2d;
        color: #fff;
    }

    .footer form button[type="submit"] {
        width: 100%;
        padding: 12px 20px;
        background-color: #ff8400;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s ease-in-out;
    }

    .footer form button[type="submit"]:hover {
        background-color: #ffa600;
    }

    .copyright {
        margin-top: 20px;
        background-color: #0f0f0f;
        padding: 20px 0;
        text-align: center;
    }

    .copyright p {
        margin: 0;
        color: #fff;
        font-size: 14px;
    }
</style>



@include('guest.partials.navbar')


<h1>NOTHING TO SEE HERE :)</h1>

<script src="https://kit.fontawesome.com/c88a405b1b.js" crossorigin="anonymous"></script>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Support</h4>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Subscribe</h4>
                <p class="footer-text">Sign up for our newsletter to get the latest updates and exclusive offers.</p>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; 2023 DC Comics</p>
        </div>
    </div>
</footer>
