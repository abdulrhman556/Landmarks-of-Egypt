<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Egyptian Pyramids - NileTreasures</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../CSS/Pages_Ancient.css" />
</head>
<body>
  <!-- Start Hero -->
  <main class="hero">
    <div class="content">
      <h1 class="reveal">
        Qaitbay Citadel
      </h1>
      <p class="reveal">
        Stand before the majestic Qaitbay Citadel, a fortress that has stood the test of time and the forces of nature. Built on the exact site of the ancient Lighthouse of Alexandria, this stunning structure serves as a reminder of the city’s rich maritime heritage. With its towering walls and panoramic views of the Mediterranean, the citadel is a symbol of strength and resilience.
      <div class="stats">
        <div class="stat-box reveal">
          <h2 class="counter" data-target="537">0</h2>
          <p>
            "Qaitbay Citadel is a majestic historical fortress, recounting stories of the Mamluk era and their role in protecting Egypt's coasts and wealth."

          </p>
        </div>
        <div class="stat-box reveal">
          <h2 class="counter" data-target="5357">0</h2>
          <p>
            A formidable fortress by the sea, its stones whispering tales of Mamluk might and strategic dominance through the ages.          </p>
        </div>
      </div>
    </div>
    <div class="image">
      <img src="../../Image/Qaitbay Citadel.jpg" alt="Egyptian Pyramids" />
    </div>
  </main>



  <!-- Start Form -->
  <main class="booking-form">
    <h1> Qaitbay Citadel</h1>
    <form action="../../PHP/form_pages.php" method="POST">
      <div class="form-row">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" name="first" id="first-name" placeholder="First Name" required />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" name="last" id="last-name" placeholder="Last Name" required />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" required />
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" id="phone" placeholder="Phone Number" required />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" name="date" id="date" required />
        </div>
        <div class="form-group">
          <label for="number-of-visitors">Number of Visitors</label>
          <input type="number" name="number" id="number-of-visitors" placeholder="Number of Visitors" required />
        </div>
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" value="Qaitbay Citadel" readonly />
      </div>

      <div class="form-group">
        <label for="price">Price per Person</label>
        <input type="text" name="price" id="price" value="30" readonly />
      </div>

      <div class="form-group">
        <label for="total-price">Total Price</label>
        <input type="text" name="total" id="total-price" value="30" readonly />
      </div>


      <button type="submit" name="submit">Proceed to Payment Page</button>
    </form>
  </main>

  <a href="../Ancient.html" class="Login-exit-link">
    <i class="fas fa-arrow-left"></i>
  </a>

  <script src="../../JS/Ancient .js"></script>
  
</body>
</html>
