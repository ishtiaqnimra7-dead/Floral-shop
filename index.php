<?php
include "./components/head.php";
include "./components/header.php";

?>
<div id="home" class="container_2">
  <video autoplay muted loop playsinline class="background_video rotated_video">
    <source src="./Images_ProjectG/flower.mp4" type="video/mp4">
  </video>

  <div class="hero_content">
    <h1 class="hero_title">Bahçe Magic</h1>
    <p class="hero_subtitle">From delicate petals to vibrant blooms, we bring the magic of nature closer to your heart,
      one bouquet at a time.</p>
  </div>
</div>
<div id="about" class="container_3">
  <h2>Behind the Blooms</h2>
  <div class="about_box">
    <p>At Bahçe Magic, our passion for flowers goes beyond petals and stems — it’s about crafting beauty that touches
      hearts. Founded with a vision to bring elegance and freshness to every occasion, we work tirelessly to deliver
      blooms that speak the language of care, celebration, and joy. With unwavering dedication and a love for nature’s
      finest creations, we strive to explore, nurture, and present flowers in their most enchanting form. Our strength
      lies in our commitment to quality, attention to detail, and the art of thoughtful arrangement — making us stand
      out among organizations in the floral industry. Every bouquet we create reflects not just beauty, but the hard
      work, creativity, and heart behind it.</P>
    <h5>🌺</h5>
  </div>
</div>
<div id="services" class="container_4">
  <div class="container_services">
    <div class="container_services_header">
      <h1>Our Featured Flowers</h1>
      <p>Explore our beautiful collection — each bloom tells its own story.</p>
      <br><br>
    </div>

    <div class="container_services_body">

      <div class="service_item" onclick="openservice('roses')">
        <div class="service_box roses"></div>
        <h2>Roses</h2>
      </div>

      <div class="service_item" onclick="openservice('tulips')">
        <div class="service_box tulips"></div>
        <h2>Tulips</h2>
      </div>

      <div class="service_item" onclick="openservice('lilies')">
        <div class="service_box lilies"></div>
        <h2>Lilies</h2>
      </div>

      <div class="service_item" onclick="openservice('mixed_bouquet')">
        <div class="service_box mixed"></div>
        <h2>Mixed Bouquets</h2>
      </div>

    </div>
  </div>
</div>

<div class="container_6">
  <div class="container_events">
    <div class="container_events_header">
      <h1>Events & Occasions</h1>
      <p>From elegant weddings to joyful birthdays, we make every moment bloom beautifully.</p>
    </div>

    <div class="container_events_body">

      <div class="event_box" onclick="openEvent('wedding')">
        <div class="event_img wedding"></div>
        <h2>Weddings</h2>
      </div>

      <div class="event_box" onclick="openEvent('birthday')">
        <div class="event_img birthday"></div>
        <h2>Birthdays</h2>
      </div>

      <div class="event_box" onclick="openEvent('corporate')">
        <div class="event_img corporate"></div>
        <h2>Corporate Events</h2>
      </div>

      <div class="event_box" onclick="openEvent('anniversary')">
        <div class="event_img anniversary"></div>
        <h2>Anniversaries</h2>
      </div>

    </div>
  </div>
</div>

<div id="feedback" class="container_5">
  <div class="container_feedback">
    <div class="container_feedback_header">
      <h1>We Value Your Feedback </h1>
    </div>

    <div class="container_feedback_body">
      <form id="feedbackForm" action="./formaction/form_action.php" method="POST" >
        <div class="form_group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="form_group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form_group">
          <label for="feedback">Your Feedback</label>
          <textarea id="feedback" name="feedback" rows="5" placeholder="Share your thoughts with us..."
            required></textarea>
        </div>

        <div class="form_group">
          <button type="submit" class="feedback_btn">Submit Feedback</button>
          <?php if (isset($_GET['status'])): ?>
            <div class="feedback_message 
              <?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>"> 
              <?php
              if ($_GET['status'] === 'success') {
                echo "🌸 Thank you! Your feedback has been submitted successfully.";
              } else {
                echo "❌ Something went wrong. Please try again.";
              }
              ?>

            </div>
          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="contact" class="container_7">
  <div class="container_contact">
    <div class="container_contact_header">
      <h1>Get in Touch</h1>
      <p>We'd love to hear from you — reach out through any of the ways below.</p>
    </div>

    <div class="container_contact_body">

      <div class="contact_block">
        <h2>📞 Call Us</h2>
        <p><strong>Landline:</strong> 091-1234567</p>
        <p><strong>Mobile:</strong> +92 300 1234567</p>
        <p><strong>WhatsApp:</strong> +92 333 9876543</p>
      </div>

      <div class="contact_block">
        <h2>📧 Email Us</h2>
        <p>support@bahcemagic.com</p>
        <p>orders@bahcemagic.com</p>
      </div>

      <div class="contact_block">
        <h2>🏬 Our Branches</h2>
        <p><strong>Peshawar:</strong> Main Saddar Road, Near Mall Plaza</p>
        <p><strong>Lahore:</strong> Gulberg III, Block H</p>
        <p><strong>Islamabad:</strong> F-7 Markaz, Flower Street</p>
      </div>

      <div class="contact_block">
        <h2>🌐 Follow Us</h2>
        <p>Instagram | Facebook | Twitter | Pinterest</p>
      </div>

    </div>
  </div>
</div>
<?php
include "./components/footer.php";
?>