<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Detail Page</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Add your custom CSS styles here */
    body {
      background-color: #f8f9fa;
    }
    .event-header {
      background-color: #007bff;
      color: #fff;
      padding: 2rem;
    }
    .event-title {
      font-size: 2.5rem;
      font-weight: bold;
    }
    .event-meta {
      font-size: 1.2rem;
    }
    .event-description {
      font-size: 1.1rem;
    }
    .event-image {
      max-height: 300px;
      object-fit: cover;
    }
    .event-details {
      padding: 2rem;
    }
  </style>
</head>
<body>
  <!-- Event Header -->
  <div class="event-header">
    <div class="container">
      <h1 class="event-title">Event Name</h1>
      <p class="event-meta">Date: July 30, 2023 | Location: City, Country</p>
    </div>
  </div>

  <!-- Event Details -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <img src="event-image.jpg" alt="Event Image" class="img-fluid event-image mb-4">
        <div class="event-description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu tellus ut dolor efficitur condimentum. Nullam vel orci non odio fringilla elementum. Maecenas maximus urna eu sapien scelerisque, id vestibulum risus dignissim.</p>
          <p>Suspendisse potenti. Duis nec odio laoreet, lacinia eros a, gravida justo. In ullamcorper dui id dui rutrum, vitae dapibus arcu tincidunt. Maecenas vel consequat lectus. In hac habitasse platea dictumst.</p>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Add any additional information or widgets here, like a registration form or event organizer details -->
      </div>
    </div>
  </div>

  <!-- Link to Bootstrap JS (Place it before closing body tag for better performance) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
