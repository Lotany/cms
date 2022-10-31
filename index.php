<?php include 'header.php' ?>
<?php require_once 'inc/config.php' ?>
<?php require_once( ROOT_PATH . '/public_functions.php') ?>
<?php $posts =getpublishedPosts(); ?>
<?php $topics = getallTopics(); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2019</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>
<?php foreach ($posts as $post): ?>
        <div class="post clearfix">
          <img src="<?php echo BASE_URL . '/images/' .$post['image']; ?>" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php?post-slug=<?php echo $post['slug']; ?>"></a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            <i class="far fa-user"> </i>
            &nbsp;
            <i class="far fa-calendar"><?php echo date("F j, Y", strtotime($post['created_at'])); ?></i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php?post-slug=<?php echo $post['slug']; ?>" class="btn read-more">Read More</a>
          </div>
        </div>
<?php endforeach ?>
      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach($topics as $topic): ?>
            <li><a href="<?php echo BASE_URL . 'filteredpost.php?topic=' . $topic['id'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <?php include 'footer.php'?>