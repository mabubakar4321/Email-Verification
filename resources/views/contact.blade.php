<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">
      <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0 fw-semibold">Contact Us</h4>
        </div>
        <div class="card-body">
          <form action="{{route('contact')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea name="message" id="message" rows="4" class="form-control" placeholder="Write your message here..." required></textarea>
            </div>
            <div class="mb-3">
              <label for="attachment" class="form-label">Attachment</label>
              <input type="file" name="attachment" id="attachment" class="form-control">
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-muted text-center small">
          We’ll get back to you as soon as possible.
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
