<?php include_once("header.php");?>
<style>
    body {
    font-family: Arial, sans-serif;
}

.text-center h1 {
    font-weight: bold;
}

.text-center p {
    font-size: 1.2rem;
    color: #6c757d;
}

h2 {
    font-weight: bold;
    margin-bottom: 20px;
}

.image-placeholder {
    background-color: #d3d3d3;
    width: 100%;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
    font-size: 1.5rem;
    border-radius: 8px;
}

.footer {
    background-color: #343a40;
    color: #fff;
    line-height:40px
}

.footer h5 {
    font-weight: bold;
}

.footer a {
    color: #fff;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

.footer ul {
    padding-left: 0;
    list-style: none;
}

</style>

    
    <div class="breadcrumbs" style="display:flex; justify-content:flex-end; border-bottom:1px solid black; background-color:yellow">
        <span class="first-item">
        <a href="index.php">Homepage</a></span>
      <span class="separator">&gt;</span>
              <span class="last-item">Contact Us</span>
  </div>
    
    <div class="container">
        <!-- About Us Header -->
        <div class="text-center  my-5">
            <h1>About Us</h1>
            <p>Let know us more!</p>
        </div>

        <!-- Vision Section -->
        <div class="row align-items-center my-5">
            <div class="col-md-6">
                <div class="image-placeholder img-fluid"><img src="image/lifelong.jpeg" alt="" width="530px" height="300px"></div>
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                <p>Student Corner is dedicated to making educational resources easily accessible for students of all ages. Our platform aggregates the best study materials, notes, and guides, ensuring that you have everything you need to excel in your studies.</p>
            </div>
        </div>

        <!-- Approach Section -->
        <div class="row align-items-center my-5">
            <div class="col-md-6 order-md-2">
                <div class="image-placeholder img-fluid"><img src="image/approach.jpeg" alt="" width="530px" height="300px"></div>
            </div>
            <div class="col-md-6 order-md-1">
                <h2>Our Approach</h2>
                <p>Our goal is to simplify the search for educational content, providing a one-stop solution for students looking for high-quality study materials. We aim to foster a community of learners who can share resources and support each other's academic journeys.</p>
            </div>
        </div>

        <!-- Process Section -->
        <div class="row align-items-center my-5">
            <div class="col-md-6">
                <div class="image-placeholder img-fluid"><img src="image/story.jpg.jpeg" alt=" " width="530px" height="300px">
                </div>
            </div>
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>Founded by a group of passionate educators and tech enthusiasts, Student Corner was born out of the need to provide easy access to quality educational materials. Our journey started in 2023, and since then, we have grown into a trusted platform for students around the world.</p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include_once("footer.php");?>