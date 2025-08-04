<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swiper Cards with Popup</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../CSS/Booking.css">
</head>

<body class="book">

    <div class="hero-section">
        <h1>Explore Egypt's Ancient Wonders</h1>
        <p>Discover Egypt's iconic sites, from the pyramids to Luxor, on an unforgettable journey.</p>
    </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Cards (9 cards فقط) -->
            <div class="swiper-slide tour-card" onclick="openPopup('popup1')">
                <img src="../Image/V1.jpg" alt="Card 1" class="card-image">
                <h1 class="card-title">7-Day Egyptian Adventure</h1>
                <p class="card-description">Explore the Pyramids, Egyptian Museum, Valley of the Kings, Luxor Temples,
                    and Aswan</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup2')">
                <img src="../Image/V2.jpg" alt="Card 2" class="card-image">
                <h1 class="card-title">7-Day Hidden Gems of Egypt</h1>
                <p class="card-description">Trip Details: Explore Egypt’s hidden gems and iconic landmarks, from temples
                    to peaceful spots.</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup3')">
                <img src="../Image/V3.jpg" alt="Card 3" class="card-image">
                <h1 class="card-title">7-Day Egypt: Ancient Wonders and Hidden Treasures</h1>
                <p class="card-description">Trip Details: Explore Egypt from a new perspective</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup4')">
                <img src="../Image/V4.jpg" alt="Card 4" class="card-image">
                <h1 class="card-title">10-Day Adventure Across Egypt: History, Nature</h1>
                <p class="card-description">Trip Details: 10 days across Egypt’s famous landmarks.</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup5')">
                <img src="../Image/V5.jpg" alt="Card 5" class="card-image">
                <h1 class="card-title">10-Day Journey Through Egypt's Lesser-Known Marvels</h1>
                <p class="card-description">Trip Details: A 10-day journey through Egypt’s lesser.</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup6')">
                <img src="../Image/V6.jpg" alt="Card 6" class="card-image">
                <h1 class="card-title">10-Day Heritage Tour: Ancient Mythology & Peaceful Escapes</h1>
                <p class="card-description">Trip Details: Dive deep into Egypt’s rich heritage with this 10-day tour</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup7')">
                <img src="../Image/V8.jpg" alt="Card 7" class="card-image">
                <h1 class="card-title">15-Day Egypt Adventure</h1>
                <p class="card-description">Explore Egypt's iconic landmarks, hidden gems, and natural wonders in 15
                    exciting days.</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup8')">
                <img src="../Image/V7.jpg" alt="Card 8" class="card-image">
                <h1 class="card-title">15-Day Cultural and Adventure Tour</h1>
                <p class="card-description">Cultural and adventure tour across Egypt's hidden gems</p>
            </div>

            <div class="swiper-slide tour-card" onclick="openPopup('popup9')">
                <img src="../Image/V9.jpg" alt="Card 9" class="card-image">
                <h1 class="card-title">15-Hidden Wonders of Egypt</h1>
                <p class="card-description">Embark on a 15-day unforgettable journey exploring Egypt’s best hidden gems.
                </p>
            </div>
        </div>
    </div>
    <!-- Popup for Card 1 -->
    <div class="tour-modal" id="popup1">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup1')">&times;</span>
            <p>Trip Details: Visit the Pyramids, the Egyptian Museum, the Valley of the Kings, Luxor Temples, and Aswan.
            </p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit the Pyramids</li>
                <li>Day 2: The Egyptian Museum - Khan El Khalili</li>
                <li>Day 3: Luxor - Karnak Temple</li>
                <li>Day 4: Aswan - Philae Temple</li>
                <li>Day 5: Nile Cruise</li>
                <li>Day 6: Return to Cairo</li>
                <li>Day 7: Departure</li>
            </ul>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 3★ & 4★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$1,009 USD per person</span>
            </p>
            <p><em>Book early and get 15% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=7-day%20Egyptian%20Cultural%20Tour&days=7&price=1009&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=3%20stars%2F4%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 2 -->
    <div class="tour-modal" id="popup2">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup2')">&times;</span>
            <p>Trip Details: Explore Egypt’s hidden gems and iconic landmarks, from ancient temples to serene natural
                spots.
            </p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit the Citadel of Saladin and Al-Muizz Street</li>
                <li>Day 2: Dahshur Pyramids - Manial Palace</li>
                <li>Day 3: Fayoum - Wadi El Rayan & Magic Lake</li>
                <li>Day 4: Minya - Beni Hassan Tombs (less-known ancient site)</li>
                <li>Day 5: Sohag - Abydos Temple</li>
                <li>Day 6: Marsa Matrouh - Cleopatra's Beach & Ageeba Beach</li>
                <li>Day 7: Departure from Cairo</li>
            </ul>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 3★ & 4★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$1,079 USD per person</span>
            </p>
            <p><em>Book early and get 5% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=7-day%20Hidden%20Gems%20of%20Egypt&days=7&price=1079&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=3%20stars%2F4%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 3 -->
    <div class="tour-modal" id="popup3">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup3')">&times;</span>
            <p>Trip Details: Discover Egypt from a fresh perspective — ancient wonders, mystical oases, and hidden local
                treasures.</p>
            <ul>
                <li>Day 1: Arrival in Alexandria - Visit the Citadel of Qaitbay and the Bibliotheca Alexandrina</li>
                <li>Day 2: Rosetta (Rashid) - Explore Ottoman Houses and the Rosetta Stone replica</li>
                <li>Day 3: Wadi El Hitan (Valley of the Whales) - UNESCO World Heritage Site</li>
                <li>Day 4: Siwa Oasis - Mountain of the Dead & Cleopatra Spring</li>
                <li>Day 5: El Quseir - A quiet Red Sea gem with historic forts and coral reefs</li>
                <li>Day 6: Return to Cairo - Visit Al-Azhar Park and El Moez Street at night</li>
                <li>Day 7: Departure</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 3★ & 4★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$1,159 USD per person</span>
            </p>
            <p><em>Book early and get 3% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=7-day%20Hidden%20Treasures%20of%20Egypt&days=7&price=1159&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=3%20stars%2F4%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 4 -->
    <div class="tour-modal" id="popup4">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup4')">&times;</span>
            <p>Trip Details: A 10-day adventure across Egypt’s famous landmarks and hidden gems — history, nature, and
                culture
                in one unforgettable journey.</p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit the Hanging Church and Coptic Cairo</li>
                <li>Day 2: El Fayoum - Tunis Village and Pottery Workshops</li>
                <li>Day 3: Bahariya Oasis - Black Desert & Crystal Mountain</li>
                <li>Day 4: White Desert - Camp under the stars in surreal landscapes</li>
                <li>Day 5: Dakhla Oasis - Visit Al-Qasr Village and hot springs</li>
                <li>Day 6: Luxor - Valley of the Nobles and Luxor Temple by night</li>
                <li>Day 7: Esna - The Temple of Khnum (small town charm)</li>
                <li>Day 8: Aswan - Nubian Village visit and boat trip to Philae Temple</li>
                <li>Day 9: Abu Simbel - Sunrise visit to Ramses II Temple</li>
                <li>Day 10: Return to Cairo - Enjoy a relaxing evening at a Nile rooftop café</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 3★ & 4★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$1,129 USD per person</span>
            </p>
            <p><em>Book early and get 10% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=10-day%20Adventure%20Across%20Egypt&days=10&price=1129&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=3%20stars%2F4%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 5 -->
    <div class="tour-modal" id="popup5">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup5')">&times;</span>
            <p>Trip Details: A 10-day journey through Egypt’s lesser-known marvels and timeless landmarks — from hidden
                monasteries to desert wonders and Nile-side serenity.</p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit Baron Empain Palace and a night tour in Zamalek</li>
                <li>Day 2: Ain Sokhna - Relax by the Red Sea and enjoy fresh seafood</li>
                <li>Day 3: St. Paul & St. Anthony Monasteries (Eastern Desert) - Spiritual and historical experience
                </li>
                <li>Day 4: El Minya - Explore Tell el-Amarna and the tombs of Akhenaten’s era</li>
                <li>Day 5: Sohag - Visit the White Monastery and Akhmim statues</li>
                <li>Day 6: Qena - Temple of Dendera (dedicated to goddess Hathor)</li>
                <li>Day 7: Luxor - Hot air balloon ride at sunrise + Hatshepsut Temple</li>
                <li>Day 8: Aswan - Elephantine Island & Aswan Botanical Gardens</li>
                <li>Day 9: Kom Ombo - Temple of Sobek and Crocodile Museum</li>
                <li>Day 10: Return to Cairo - Chill day at Al-Azhar Park with panoramic views</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 3★ & 4★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$1,199 USD per person</span>
            </p>
            <p><em>Book early and get 10% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=10-day%20Journey%20Through%20Egypt's%20Lesser-known%20Marvels&days=10&price=1199&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=3%20stars%2F4%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 6 -->
    <div class="tour-modal" id="popup6">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup6')">&times;</span>
            <p>Trip Details: Dive deep into Egypt’s rich heritage with this 10-day tour — where ancient mythology meets
                breathtaking landscapes and peaceful escapes.</p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit Abdeen Palace and downtown walking tour</li>
                <li>Day 2: Zawyet el Aryan (little-known pyramid site) and stroll along the Nile Corniche</li>
                <li>Day 3: Helwan - Sulfur Springs & Helwan Wax Museum</li>
                <li>Day 4: Ismailia - Suez Canal Museum & Temples of Tell el-Maskhuta</li>
                <li>Day 5: Port Said - Visit Lighthouse area & traditional fish market</li>
                <li>Day 6: Damietta - Ras El Bar, meeting point of Nile & Mediterranean</li>
                <li>Day 7: Mansoura - Historical battlefield tour & El-Mansoura Palace</li>
                <li>Day 8: Tanta - Sayed El Badawi Mosque & local dessert tasting (balah el sham, meshabbak)</li>
                <li>Day 9: Return to Cairo - Night felucca ride on the Nile</li>
                <li>Day 10: Free day shopping at City Stars or Khan El Khalili before departure</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 4★ & 4.5★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$2,000 USD per person</span>
            </p>
            <p><em>Book early and get 10% off! Limited seats available.</em></p>

            <a href="Booking_Form.html?trip_name=10-day%20Cultural%20Tour%20of%20Egypt&days=10&price=2000&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=4%20stars%2F4.5%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 7 -->
    <div class="tour-modal" id="popup7">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup7')">&times;</span>
            <p>Trip Details: 15 unforgettable days exploring Egypt’s iconic landmarks, secret hideaways, cultural
                treasures,
                and natural wonders. Perfect for explorers, dreamers, and lovers of history.</p>
            <ul>
                <li>Day 1: Arrival in Cairo - Visit Salah El-Din Citadel & Al-Muizz Street</li>
                <li>Day 2: Saqqara & Dahshur - Step Pyramid and Red Pyramid exploration</li>
                <li>Day 3: El Fayoum - Wadi El Rayan waterfalls & Magic Lake</li>
                <li>Day 4: Bahariya Oasis - Jeep safari through the Black Desert</li>
                <li>Day 5: White Desert - Overnight camping under the stars</li>
                <li>Day 6: Dakhla Oasis - Al Qasr Islamic village & hot springs</li>
                <li>Day 7: Luxor - Karnak Temple & Sound & Light Show</li>
                <li>Day 8: Luxor West Bank - Tombs of Nobles & Habu Temple</li>
                <li>Day 9: Edfu - Visit Temple of Horus & continue to Kom Ombo</li>
                <li>Day 10: Aswan - Philae Temple & Unfinished Obelisk</li>
                <li>Day 11: Nubian Village - Cooking workshop & traditional dance</li>
                <li>Day 12: Abu Simbel - Sunrise tour of the temples</li>
                <li>Day 13: Return to Cairo - Relaxing day at Al-Azhar Park</li>
                <li>Day 14: Alexandria - Montaza Palace, Qaitbay Citadel & sea walk</li>
                <li>Day 15: Free day - Shopping at Khan El Khalili or City Stars before departure</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 4★ & 5★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$2,147 USD per person</span>
            </p>
            <p><em>Book early and get 10% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=15%20Unforgettable%20Days%20Exploring%20Egypt's%20Iconic%20Landmarks&days=15&price=2147&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=4%20stars%2F5%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 8 -->
    <div class="tour-modal" id="popup8">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup8')">&times;</span>
            <p><strong>Trip Details:</strong> A 15-day cultural and adventure tour across Egypt's hidden gems and
                legendary
                landmarks. From ancient tombs to dolphins in the Red Sea — this journey is crafted for explorers who
                crave the
                extraordinary.</p>

            <ul>
                <li><strong>Day 1:</strong> Arrival in Cairo - Nile dinner cruise with traditional music & dance</li>
                <li><strong>Day 2:</strong> Mokattam Hills & Cave Church – breathtaking city view</li>
                <li><strong>Day 3:</strong> Islamic Cairo walk – Al-Azhar Mosque & El-Muizz Street</li>
                <li><strong>Day 4:</strong> Al Manzala Lake (Damietta) – birdwatching & local seafood lunch</li>
                <li><strong>Day 5:</strong> Rosetta (Rashid) – explore Ottoman houses & Rosetta Stone site</li>
                <li><strong>Day 6:</strong> Wadi El-Hitan – UNESCO Fossil Valley adventure</li>
                <li><strong>Day 7:</strong> Desert camp near Qasr El Sagha – stargazing & Bedouin dinner</li>
                <li><strong>Day 8:</strong> Minya – Beni Hassan tombs & sunset Nile cruise</li>
                <li><strong>Day 9:</strong> Sohag – Akhmim Open-Air Museum & Seti I Temple</li>
                <li><strong>Day 10:</strong> Qena – pottery workshops & historic mosque visit</li>
                <li><strong>Day 11:</strong> Luxor by night – Temple of Luxor illuminated</li>
                <li><strong>Day 12:</strong> Luxor Museum & sunset felucca sailing</li>
                <li><strong>Day 13:</strong> Travel to Marsa Alam – relax by the Red Sea</li>
                <li><strong>Day 14:</strong> Sataya Reef – Dolphin House snorkeling experience 🐬</li>
                <li><strong>Day 15:</strong> Return to Cairo – farewell at Giza sunset point</li>
            </ul>

            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 4★ & 5★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$2,249 USD per person</span>
            </p>
            <p><em>Book early and get 12% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=Hidden%20Gems%20and%20Landmarks%20Adventure&days=15&price=2249&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=4%20stars%2F5%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>

    <!-- Popup for Card 9 -->
    <div class="tour-modal" id="popup9">
        <div class="modal-content">
            <span class="close-btn" onclick="closePopup('popup9')">&times;</span>
            <p>Trip Details: A 15-day cultural and adventure tour through Egypt's hidden gems and iconic destinations —
                designed for curious minds, nature lovers, and wanderers.</p>
            <ul>
                <li>Day 1: Arrival in Cairo - Dinner cruise with live music on the Nile</li>
                <li>Day 2: Visit the Cave Church & panoramic view from Mokattam Hills</li>
                <li>Day 3: Al-Azhar Mosque tour + Islamic Cairo walking tour</li>
                <li>Day 4: Al Manzala Lake (Damietta) - Birdwatching & boat ride</li>
                <li>Day 5: Rosetta (Rashid) - Visit the Rosetta Stone replica & Ottoman houses</li>
                <li>Day 6: Wadi El-Hitan (Fayoum) - Fossil Valley UNESCO site</li>
                <li>Day 7: Overnight desert camp near Qasr El Sagha Temple</li>
                <li>Day 8: Minya - Visit Beni Hassan tombs & cruise on the Nile</li>
                <li>Day 9: Sohag - Museum of Akhmim & Temple of Seti I</li>
                <li>Day 10: Qena - Visit the Grand Mosque and traditional pottery workshops</li>
                <li>Day 11: Luxor - Temple of Luxor by night</li>
                <li>Day 12: Luxor Museum & felucca sail at sunset</li>
                <li>Day 13: Travel to Marsa Alam - Red Sea snorkeling paradise</li>
                <li>Day 14: Sataya Reef Dolphin House tour 🐬</li>
                <li>Day 15: Return to Cairo - Relax at Giza Plateau sunset point before departure</li>
            </ul>
            <p><strong>Package Includes:</strong></p>
            <ul>
                <li>All internal transport (air-conditioned buses & domestic flights)</li>
                <li>Accommodation in 4★ & 5★ hotels/lodges</li>
                <li>Professional tour guide (English/French/Arabic)</li>
                <li>All entry tickets to historical sites</li>
                <li>Daily breakfast + selected meals</li>
            </ul>

            <p><strong>Total Price:</strong> <span style="color:green; font-weight:bold;">$2,693 USD per person</span>
            </p>
            <p><em>Book early and get 10% off! Limited seats available.</em></p>
            <a href="Booking_Form.html?trip_name=Hidden%20Gems%20Adventure%20Tour&days=15&price=2693&transport=air-conditioned%20buses%20%26%20domestic%20flights&guide=English%2FFrench%2FArabic&hotel=4%20stars%2F5%20stars"
                class="btn-book">
                Book Now
            </a>
        </div>
    </div>



    <footer class="footer">
        <div class="containere">
            <!-- FAQ Section -->
            <div class="row">
                <div class="col-md-12">
                    <h5>Frequently Asked Questions</h5>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="faq-item" onclick="toggleAnswer(0)"><i class="fas fa-landmark"></i> Why visit
                                Egypt?</div>
                            <div class="faq-answer">Egypt has a rich history, famous pyramids, and breathtaking
                                landscapes.</div>

                            <div class="faq-item" onclick="toggleAnswer(1)"><i class="fas fa-map-marked-alt"></i> Top
                                attractions?
                            </div>
                            <div class="faq-answer">The Great Pyramids, Luxor Temple, and the Nile River cruises.</div>

                            <div class="faq-item" onclick="toggleAnswer(2)"><i class="fas fa-shield-alt"></i> Is Egypt
                                safe?</div>
                            <div class="faq-answer">Yes, Egypt is generally safe with strong tourist security.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="faq-item" onclick="toggleAnswer(3)"><i class="fas fa-exclamation-circle"></i>
                                Booking issues?
                            </div>
                            <div class="faq-answer">Contact our support team or check your email for confirmation.</div>

                            <div class="faq-item" onclick="toggleAnswer(4)"><i class="fas fa-edit"></i> Modify booking?
                            </div>
                            <div class="faq-answer">Yes, modifications are allowed within 24 hours of booking.</div>

                            <div class="faq-item" onclick="toggleAnswer(5)"><i class="fas fa-credit-card"></i> Payment
                                methods?</div>
                            <div class="faq-answer">We accept credit cards, PayPal, and cash upon arrival.</div>

                            <div class="faq-item" onclick="toggleAnswer(6)"><i class="fas fa-undo"></i> Refund policy?
                            </div>
                            <div class="faq-answer">Refunds are possible based on our cancellation policy.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support & Contact Section -->
            <div class="row mt-4">
                <!-- Support Section -->
                <div class="col-md-6">
                    <h5>Support</h5>
                    <form action="../PHP/suppert.php" method="POST" class="support-form">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="issue" rows="3" placeholder="Your Issue" required></textarea>
                        <button type="submit" name="submit" class="btn btn-submit w-100">Submit</button>
                    </form>
                </div>

                <!-- Contact Section -->
                <div class="col-md-6">
                    <h5>Contact Us</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-phone-alt"></i> +20 123 456 7890</p>
                        <p><i class="fas fa-envelope"></i> support@egypttravel.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Cairo, Egypt</p>

                        <!-- Social Media Icons -->
                        <div class="social-icons mt-3">
                            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <a href="../HTML/Nav.html" class="Myths-exit-link">
        <i class='bx bxs-home'></i>
    </a>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../JS/Book.js"></script>
</body>

</html>