 <footer class="ftco-footer ftco-bg-dark ftco-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">
                         <a class="navbar-brand" href="{{ url('/') }}">
                             <img src="images\ndochwhite.png" alt="NdochCars & Imports Logo" class="navbar-logo" />
                         </a>
                         <style>
                             .navbar-logo {
                                 max-height: 130px;
                                 /* Adjust as needed */
                                 width: auto;
                             }
                         </style>
                     </h2>
                     <p>
                         Ndoch Cars & Imports is your trusted source for high-quality
                         vehicles in Kenya. We pride ourselves on offering exceptional
                         customer service and a wide selection of meticulously inspected
                         cars.
                     </p>
                     <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                         <li class="ftco-animate">
                             <a href="https://www.facebook.com/Ndochcars?mibextid=LQQJ4d"><span
                                     class="fab fa-facebook"></span></a>
                         </li>
                         <li class="ftco-animate">
                             <a href="https://www.facebook.com/Ndochcars?mibextid=LQQJ4d"><span
                                     class="fab fa-twitter"></span></a>
                         </li>
                         <li class="ftco-animate">
                             <a href="https://www.facebook.com/Ndochcars?mibextid=LQQJ4d"><span
                                     class="fab fa-instagram"></span></a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4 ml-md-5">
                     <h2 class="ftco-heading-2">Quick Links</h2>
                     <ul class="list-unstyled">
                         <li><a href="{{ url('about') }}" class="py-2 d-block">About Us</a></li>
                         <li><a href="{{ url('car') }}" class="py-2 d-block">Inventory</a></li>
                         <li><a href="{{ url('contact') }}" class="py-2 d-block">Contact</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Contact Us</h2>
                     <div class="block-23 mb-3">
                         <ul>
                             <li>
                                 <span class="icon icon-map-marker"></span>
                                 <span class="text">Kiambu road fourways, Nairobi, Kenya</span>
                             </li>
                             <li>
                                 <a href="tel:+254712345678">
                                     <span class="icon icon-phone"></span>
                                     <span class="text">+254 712 345 678</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="mailto:ndochcars@gmail.com">
                                     <span class="icon icon-envelope"></span>
                                     <span class="text">ndochcars@gmail.com</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-6">
                 <h2 class="ftco-heading-2" style="color: #fff;">Subscribe to Our Newsletter</h2>
                 <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form"
                     style="margin-bottom: 30px;">
                     @csrf
                     <div style="display: flex; margin-bottom: 20px;">
                         <input type="text" name="name" class="form-control" placeholder="Enter your name"
                             style="flex: 1; border-radius: 30px; padding: 15px;">
                     </div>
                     <div style="display: flex; margin-bottom: 20px;">
                         <input type="email" name="email" class="form-control" placeholder="Enter your email"
                             style="flex: 1; border-radius: 30px; padding: 15px;">
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg btn-block"
                         style="border-radius: 30px; padding: 15px; background-color: #007bff; border: none; color: #fff; transition: background-color 0.3s ease;">Subscribe</button>
                 </form>
                 @if (session('success'))
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                 @endif
             </div>
         </div>

         <div class="row">
             <div class="col-md-12 text-center">
                 <p>
                     Copyright &copy;
                     <script>
                         document.write(new Date().getFullYear());
                     </script>
                     Ndoch Cars & Imports. All rights reserved. Developed by
                     <a href="https://www.jrmhd.tech/" target="_blank">JRMHD Technologies</a>
                 </p>
             </div>
         </div>
     </div>
 </footer>
