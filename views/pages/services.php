 <!-- Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

 <style>
   body {
     margin: 0;
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     background: #0a192f;
     color: #fff;
   }

   .container-services {
     width: 100%;
     padding: 6rem 2rem;
     background: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
     background-size: 300% 300%;
     animation: gradientBG 12s ease infinite;
     color: #fff;
   }

   /* Gradient animation */
   @keyframes gradientBG {
     0% {
       background-position: 0% 50%;
     }

     50% {
       background-position: 100% 50%;
     }

     100% {
       background-position: 0% 50%;
     }
   }


   .section-title {
     text-align: center;
     margin-bottom: 4rem;
   }

   .section-title span {
     display: inline-block;
     font-size: 1rem;
     text-transform: uppercase;
     font-weight: bold;
     color: #38bdf8;
     letter-spacing: 2px;
   }

   .section-title h1 {
     font-size: 3rem;
     margin: 0.5rem 0;
     color: #fff;
     font-weight: 800;
   }

   .section-title p {
     max-width: 650px;
     margin: 0 auto;
     color: #dbeafe;
     font-size: 1.1rem;
   }

   .services-grid {
     display: grid;
     grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
     gap: 2.5rem;
     max-width: 1200px;
     margin: 0 auto;
   }

   .service-card {
     background: rgba(255, 255, 255, 0.9);
     border-radius: 16px;
     padding: 2.5rem 2rem;
     text-align: center;
     transition: all 0.4s ease;
     box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
     color: #000;
   }

   .service-card:hover {
     transform: translateY(-15px) scale(1.03);
     box-shadow: 0 15px 35px rgba(56, 189, 248, 0.4);
   }

   .service-card i {
     font-size: 3.2rem;
     color: #0ea5e9;
     margin-bottom: 1rem;
     transition: transform 0.4s ease;
   }

   .service-card:hover i {
     transform: rotate(10deg) scale(1.2);
   }

   .service-card h2 {
     font-size: 2.2rem;
     margin: 0.5rem 0;
     font-weight: 700;
     color: #000;
   }

   .service-card p {
     font-size: 1.1rem;
     color: #333;
     margin-bottom: 1.2rem;
   }

   .service-card ul {
     list-style: none;
     padding: 0;
     margin: 0;
     font-size: 1rem;
     color: #222;
   }

   .service-card ul li {
     margin-bottom: 8px;
     display: flex;
     align-items: center;
     gap: 10px;
   }

   .service-card ul li::before {
     content: "✔";
     color: #0ea5e9;
     font-weight: bold;
   }

   @media (max-width: 768px) {
     .section-title h1 {
       font-size: 2.2rem;
     }

     .service-card {
       padding: 2rem 1.5rem;
     }
   }
 </style>
 </head>

 <body>

   <div class="container-services">
     <!-- Section Title -->
     <div class="section-title">
       <span>Our Benefits</span>
       <h1>Why Choose Auto Shine?</h1>
       <p>We go beyond washing cars. At Auto Shine, we combine expertise, care, and the latest technology to give your vehicle the shine and protection it deserves.</p>
     </div>

     <!-- Services Grid -->
     <div class="services-grid">
       <!-- New Card 1 -->
       <div class="service-card">
         <i class="fas fa-shower"></i>
         <h2>500</h2>
         <p>Cars Washed</p>
         <ul>
           <li>Quick exterior washes</li>
           <li>Deep interior vacuuming</li>
           <li>Eco-friendly water system</li>
         </ul>
       </div>

       <!-- New Card 2 -->
       <div class="service-card">
         <i class="fas fa-certificate"></i>
         <h2>Certified</h2>
         <p>Professional Team</p>
         <ul>
           <li>Trained detailing experts</li>
           <li>Polishing & waxing specialists</li>
           <li>Customer-first service</li>
         </ul>
       </div>

       <!-- New Card 3 -->
       <div class="service-card">
         <i class="fas fa-gem"></i>
         <h2>Premium</h2>
         <p>Quality Guaranteed</p>
         <ul>
           <li>Luxury car safe products</li>
           <li>Scratch-free cleaning</li>
           <li>Shine that lasts</li>
         </ul>
       </div>

       <!-- New Card 4 -->
       <div class="service-card">
         <i class="fas fa-clock"></i>
         <h2>7 Days</h2>
         <p>Open Weekly</p>
         <ul>
           <li>Early morning service</li>
           <li>Late evening hours</li>
           <li>Fast turnaround time</li>
         </ul>
       </div>

       <!-- Old Card 1 -->
       <div class="service-card">
         <i class="fas fa-users"></i>
         <h2>250</h2>
         <p>Happy Clients</p>
         <ul>
           <li>Exterior & Interior Cleaning</li>
           <li>Hand Waxing & Polishing</li>
           <li>Eco-Friendly Products</li>
         </ul>
       </div>

       <!-- Old Card 2 -->
       <div class="service-card">
         <i class="fas fa-briefcase"></i>
         <h2>20</h2>
         <p>Years Experience</p>
         <ul>
           <li>Skilled & Friendly Staff</li>
           <li>Professional Tools</li>
           <li>Affordable Packages</li>
         </ul>
       </div>

       <!-- Old Card 3 -->
       <div class="service-card">
         <i class="fas fa-star"></i>
         <h2>100%</h2>
         <p>Satisfaction</p>
         <ul>
           <li>Attention to Detail</li>
           <li>Premium Products</li>
           <li>Guaranteed Quality</li>
         </ul>
       </div>

       <!-- Old Card 4 -->
       <div class="service-card">
         <i class="fas fa-map-marker-alt"></i>
         <h2>6</h2>
         <p>Service Locations</p>
         <ul>
           <li>Convenient Spots</li>
           <li>Fast & Easy Access</li>
           <li>Expanding Network</li>
         </ul>
       </div>
     </div>
   </div>

 </body>