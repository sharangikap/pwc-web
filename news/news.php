<!DOCTYPE html>
<html lang="en">
<head>
    <title>Article Title │ Prince of Wales' College, Moratuwa</title>
    <?php include 'header.php'; ?>
    

  <style>
    /* Add any custom styles here */

    .article-content {
      margin-bottom: 30px;
    }
/* Mobile Devices (up to 767px) */
@media (max-width: 767px) {
  .article-img {
    max-width: 100%;
  }
}

/* Tablet Devices (768px to 991px) */
@media (min-width: 768px) and (max-width: 991px) {
  .article-img {
    max-width: 500px;
  }
}

/* Desktop Devices (992px and above) */
@media (min-width: 992px) {
  .article-img {
    max-width: 750px;
  }
}

/* Common styles for all devices */
.article-img {
  height: auto;
  border-radius: 5px;
}

  </style>
</head>

<body>
    <br>
  <div class="container">
    <!-- Article Header -->
    <header>
      <div class="desc">
      <h1 class="text-center">Sample News Article</h1>
  </div>
      <p class="text-center">Published on July 23, 2023</p>
      <p class="text-center">Category: Sports</p>
    </header>

    <!-- Article Image -->
    <div class="text-center">
      <img src="../img/article-img-test.jpg" alt="Article Image" class="article-img">
    </div>
<br>
    <!-- Article Content -->
    <justify>
    <div class="article-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur ultricies eros ut sollicitudin. Sed vel nisi tincidunt, ultrices quam id, sodales elit. Vivamus aliquet enim eu ipsum porttitor facilisis.</p>

      <p>Suspendisse et dui euismod, elementum lectus nec, interdum mi. Vivamus finibus elit et velit vestibulum, id ultricies dolor lobortis. Nunc in malesuada nulla. Maecenas quis est tristique, sagittis ligula eu, scelerisque mauris.</p>

      <p>Phasellus vel interdum dolor. Integer nec mi ac tellus malesuada consequat. Nulla facilisi. Fusce eu nulla felis.</p>

      <p>Sed a quam nec odio vulputate malesuada. Nulla ac orci ut arcu pellentesque vulputate. Sed in enim vel justo aliquet tristique eu eu purus.</p>

      <p>Curabitur ac scelerisque turpis. Donec faucibus, tortor vel aliquam scelerisque, nisi lacus sollicitudin justo, id congue odio est nec nulla. Vestibulum volutpat nibh ac bibendum tristique.</p>

      <p>Nunc id fringilla neque. Sed nec nunc nec sem faucibus hendrerit. Quisque eu arcu vel odio mollis cursus non ut turpis.</p>

      <p>Sed eget justo eu dui dignissim pulvinar nec ac purus. Etiam scelerisque consectetur felis, a ullamcorper metus laoreet eget. Donec ac quam lacus.</p>
    </div>
  </justify>
   
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
