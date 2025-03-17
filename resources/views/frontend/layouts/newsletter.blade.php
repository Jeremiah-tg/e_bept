
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <!-- <input name="email" placeholder="Your email address" required="" type="email"> -->
                            <input type="email" required="" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{3,}$" required placeholder="Enter you Email: example@gmail.com">
                            <span id="email-error" style="color: red; display: none;">Invalid email address!</span>
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                        @if(session('success'))
                          <div class="alert alert-success">
                              {{ session('success') }}
                          </div>
                          <!-- <script>
                              alert("{{ session('success') }}");
                          </script> -->
                      @endif

                      @if(session('info'))
                          <div class="alert alert-info" style="text-align:center;">
                              {{ session('info') }}
                          </div>
                          <!-- <script>
                              alert("{{ session('info') }}");
                          </script> -->
                      @endif

                      @if(session('error'))
                          <div class="alert alert-danger">
                              {{ session('error') }}
                          </div>
                          <!-- <script>
                              alert("{{ session('error') }}");
                          </script> -->
                      @endif

                      <!-- script for email validation -->
            <script>
                    document.querySelector("form").addEventListener("submit", function(event) {
                        let emailInput = document.getElementById("email");
                        let emailError = document.getElementById("email-error");
                        let email = emailInput.value.trim();

                        // List of common fake domains
                        let fakeDomains = ["test.com", "fake.com", "mailinator.com", "tempmail.com", "yopmail.com"];

                        // Extract domain
                        let domain = email.substring(email.lastIndexOf("@") + 1);

                        // Check if the domain is in the fake list
                        if (fakeDomains.includes(domain)) {
                            // emailError.style.display = "inline";
                            emailError.textContent = "Please enter a real email address!";
                            alert("Please enter a real email address!");
                            event.preventDefault(); // Stop form submission
                            alert("{{ session('error') }}");
                            return;
                        }

                        // Reset error message if valid
                        emailError.style.display = "none";
                    });
                  </script>

                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
