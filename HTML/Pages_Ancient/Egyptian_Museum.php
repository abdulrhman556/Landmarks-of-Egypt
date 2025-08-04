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
        Egyptian Museum
      </h1>
      <p class="reveal">
        Step into the Egyptian Museum — a timeless vault of ancient wonders. Home to over 120,000 artifacts, it holds the secrets of pharaohs, gods, and lost civilizations. From golden treasures to royal mummies, each exhibit unveils a piece of Egypt’s eternal soul.
      </p>
      <div class="stats">
        <div class="stat-box reveal">
          <h2 class="counter" data-target="898">0</h2>
          <p>
            The Egyptian Museum is a treasure trove, embracing within its halls unique artifacts that narrate vivid chapters of ancient Egyptian history and the splendor of its arts."          </p>
        </div>
        <div class="stat-box reveal">
          <h2 class="counter" data-target="4568">0</h2>
          <p>
            A treasure trove holding the breath of millennia, where the artistry and mysteries of a glorious civilization lie unveiled.          </p>
        </div>
      </div>
    </div>
    <div class="image">
      <img src="../../Image/Egyptian Museum.jpg" alt="Egyptian Pyramids" />
    </div>
  </main>



  <!-- Start Form -->
  <main class="booking-form">
    <h1>  Egyptian Museum</h1>

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
        <input type="text" name="location" id="location" value="Egyptian Museum" readonly />
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
