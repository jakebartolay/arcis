<section id="contact" style="height: 100vh;">
<div class="container">
    <div class="padding-height">
    <h1 class="fw-bolder text-center">Contact us</h1>
    <div class="line"></div>
    <p class="display-6 fs-6 text-center">Your Feedback about Home Page</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 rounded ">
        <h5 class="text-center text-success"></h5>
        <form action="/" method="POST" id="form-box" class="p-2">
        @csrf
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <br>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <br>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="bi bi-chat-left-dots-fill"></i></i></span>
            </div>
            <textarea name="text" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <br>
          <div class="form-group">
            <input type="submit" class="btn btn-lg btn-primary" value="Send">
          </div>
        </form>
      </div>
    </div>
</div>
</section>