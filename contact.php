 <?php  $page="contact";
 include('header.php'); ?>
    
    
    
    <section id="">
    
		<img src="img/banners/contact_banner.jpg" alt="" width="100%">
		
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="#">info@example.com</a></p>
            </div>
          </div>
        </div>
          
        
		 
          
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.1763113085176!2d77.32441351467924!3d28.59448708243279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4fbf0ff1ba7%3A0xb453443703c6c0c1!2sThe+Design+Village!5e0!3m2!1sen!2sin!4v1521281443922" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

          <br>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="returnmessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <!--<div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>-->
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" id="comment" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

    
    
   
    
    <script>
            $(function () {
                    $("#contact_us_form").submit(function (e) {
                        e.preventDefault();
                        $("#returnmessage").removeClass('success');
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var comment = $("#comment").val();
                        var pattern= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        var csrf = $('#csrf').val();
                        $("#returnmessage").empty(); 
                        if (name == '' || email == '' || comment == '') {
                            $("#returnmessage").html("<span class='error'>Please Fill Required Fields</span>");
                        }else if(pattern.test(email) == false){
                            $("#returnmessage").html("<span class='error'>Invalid Email Address</span>");
                        }else if(name.length < 3){
                            $("#returnmessage").html("<span class='error'>Name seems wrong</span>");
                        }else if(comment.length < 3){
                            $("#returnmessage").html("<span class='error'>Comment is too short</span>");
                        } else {
			    $("#contact_us_form button[type='submit']").prop('disabled',true);
                            $.post("contact/contact.php", {
                                name: name,
                                email: email,
                                comment: comment,
                                csrf:csrf
                            }, function (data) {
				$("#contact_us_form button[type='submit']").prop('disabled',false);
                                $("#returnmessage").append(data); 
                                if (data == "Your Query has been received, We will contact you soon.") {
                                    $("#returnmessage").addClass('success');
                                    $("#contact_us_form")[0].reset();
                                }
                            });
                        }
                    });
            });

        </script>



     <?php include('footer.php'); ?>