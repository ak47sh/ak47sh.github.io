document.addEventListener("DOMContentLoaded", function() {
    // code to run when the DOM is ready
    const headerthing = document.createElement("div");
    headerthing.innerHTML = `
    <nav class="container border-bottom">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
      <a href="index.html" class="text-decoration-none"><div style="color: white;" class="navbrand p-2 me-5">kasu</div></a>
      <div class="d-flex justify-content-center">
        <a href="about.html" class="text-decoration-none"><div style="color: white;" class="p-2 mx-4">about us</div></a>
        <a href="stores.html" class="text-decoration-none"><div style="color: white;" class="p-2 mx-4">stores</div></a>
        <a href="FAQ.html" class="text-decoration-none"><div style="color: white;" class="p-2 mx-4">FAQ</div></a>
        <a href="contact.html" class="text-decoration-none"><div style="color: white;" class="p-2 mx-4">contact us</div></a>
      </div>  
      <div class="d-flex align-items-center">
        <div class="me-4">signup</div>
        <div class="ms-4">login</div>
      </div>  
    </div>
  </nav>
    `.trim();
    headerthing.classList.add("headerthing"); // add the "my-class" class
    document.body.insertBefore(headerthing, document.body.firstChild);

  });
   
