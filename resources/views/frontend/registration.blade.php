<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f8fc;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .contact-page {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      max-width: 650px;
      width: 90%;
      text-align: center;
    }

    .contact-page h2 {
      font-size: 28px;
      color: #005ca8;
      margin-bottom: 10px;
    }

    .contact-page p {
      color: #555;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 14px 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
      width: 100%;
      transition: border 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border: 1px solid #005ca8;
    }

    .contact-form textarea {
      resize: none;
      min-height: 120px;
    }

    .contact-btn {
      padding: 14px;
      background: #005ca8;
      color: white;
      border: none;
      font-weight: 600;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-btn:hover {
      background: #004a87;
    }

    @media (max-width: 768px) {
      .contact-page {
        padding: 24px;
      }

      .contact-page h2 {
        font-size: 24px;
      }

      .contact-page p {
        font-size: 14px;
      }

      .contact-form input,
      .contact-form textarea {
        font-size: 14px;
      }

      .contact-btn {
        font-size: 14px;
        padding: 12px;
      }
    }

    @media (max-width: 480px) {
      .contact-page {
        padding: 20px;
        border-radius: 8px;
      }

      .contact-page h2 {
        font-size: 22px;
      }

      .contact-form {
        gap: 12px;
      }
    }
  </style>
</head>
<body>
  <div class="contact-page">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you! Please fill out the form below.</p>
    <form class="contact-form" id="contactForm" action="/contact-submit" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="phone" placeholder="Your Phone" />
      <button type="submit" class="contact-btn">Send Message</button>
    </form>
  </div>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const formData = new FormData(this);

      fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.message) {
          alert(data.message); // Display alert with the message from the server
          if (data.message === 'Thank you! We will get back to you soon.') {
            this.reset(); // Reset the form to empty all fields
          }
        }
      })
      .catch(error => {
        alert('An error occurred. Please try again later.');
      });
    });
  </script>
</body>
</html>