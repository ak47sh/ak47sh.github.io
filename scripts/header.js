document.addEventListener("DOMContentLoaded", function() {
    // code to run when the DOM is ready
    const headerthing = document.createElement("div");
    headerthing.innerHTML = `
    <nav class="container navbar navbar-expand-xxl py-3 navbar-dark border-bottom">
    <a href="index.html" class="navbar-brand me-5 text-decoration-none">
      <div style="color: white;" class="p-2">kasu</div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <div class="navbar-nav centerabousoulte mx-auto" style="width: fit-content;">
        <a href="investments.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 ms-5 mx-4">Investments</div>
        </a>
        <a href="stores.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 mx-4">Stores</div>
        </a>
        <a href="FAQ.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 mx-4">FAQ</div>
        </a>
        <a href="contact.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 mx-4">Contact us</div>
        </a>
      </div>
      <div class="navbar-nav ms-auto ml-auto">
        <a href="signup.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 me-4">signup</div>
        </a>
        <a href="login.html" class="nav-link text-decoration-none">
          <div style="color: white;" class="p-2 ms-4">login</div>
        </a>
      </div>
    </div>
  </nav>
   `.trim();
    headerthing.classList.add("headerthing"); // add the "my-class" class
    document.body.insertBefore(headerthing, document.body.firstChild);
  });
  
   
