<?php
require_once('config.php');
include('includes/header.php');
?>
    <section class="contact-section">
      <div class="contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>Contact US</h2>
        <div class="line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class="text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic quasi
          deleniti molestias incidunt optio, perspiciatis totam illum assumenda.
          Modi consequatur facere libero inventore cum ut soluta quisquam
          pariatur ea in?
        </p>
      </div>
      <div class="contact-body">
        <div class="contact-info">
          <div>
            <a href="#" class="contact-link"
              ><ion-icon name="call-outline"></ion-icon
            ></a>
            <span>Phone No.</span>
            <span class="text">0123456789</span>
          </div>

          <div>
            <a href="#" class="contact-link"
              ><ion-icon name="mail-open-outline"></ion-icon
            ></a>
            <span>Email</span>
            <span class="text">Jenkinsonlife@gmail.com </span>
          </div>
          <div>
            <a href="#" class="contact-link"
              ><ion-icon name="map-outline"></ion-icon
            ></a>
            <span>Address</span>
            <span class="text">Aptech, 285 Đội Cấn, Ba Đình, Hà Nội </span>
          </div>
          <div>
            <a href="#" class="contact-link"
              ><ion-icon name="time-outline"></ion-icon
            ></a>
            <span>Opening Hours</span>
            <span class="text">Monday-Friday (9:00 AM to 5:00PM)</span>
          </div>
        </div>

        <div class="contact-form">
          <form>
            <div>
              <input
                name = "sender_name"
                type="text"
                class="form-control"
                placeholder="Your Name"
              />
            </div>
            <div>
              <input name ="email" type="email" class="form-control" placeholder="E-mail" />
            </div>
            <div>
              <input name ="Subject" type="text" class="form-control" placeholder="Subject" />
            </div>
            <textarea
              rows="5"
              placeholder="Message"
              class="form-control"
            ></textarea>
            <input type="submit" value="send message" class="send-btn" />
          </form>

          <div>
            <img src="./assets/img/contact.svg" alt="contact" />
          </div>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9266780507037!2d105.81897780000001!3d21.035619600000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d147f6b89%3A0x1d06ac83e0aa085f!2sTraining%20System%20Aptech%20International%20Programmer!5e0!3m2!1sen!2s!4v1696315511068!5m2!1sen!2s"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

      <div class="contact-footer">
        <h3>Follow Us</h3>
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- ionicon link -->
    <?php 
    include('includes/footer.php');
    ?>
