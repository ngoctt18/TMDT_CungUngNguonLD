
<?php
  include_once('views/_header.php');

  // Khởi tạo các file cần thiết
  $validation = array('public/js/jquery.validate.min.js', 'public/js/contact_me.js', 'public/js/jqBootstrapValidation.js');
?>

<!-- Page Header -->
    <header class="masthead" style="background-image: url('public/img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h2>Liên hệ với chúng tôi</h2>
              <span class="subheading">Bạn có câu hỏi? Chúng tôi sẽ trả lời.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Bạn muốn giữ liên lạc với chúng tôi? Điền vào mẫu dưới đây để gửi cho chúng tôi một tin nhắn và chúng tôi sẽ liên lạc lại với bạn nhanh nhất có thể!</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Tên</label>
                <input type="text" class="form-control" placeholder="Tên" id="name" name="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Số điện thoại</label>
                <input type="tel" class="form-control" placeholder="Số điện thoại" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Lời nhắn</label>
                <textarea rows="5" class="form-control" placeholder="Lời nhắn" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Gửi</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>


<?php
  include_once('views/_footer.php');
?>