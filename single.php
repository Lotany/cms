<?php include 'header.php' ?>
<?php require_once( ROOT_PATH . '/public_functions.php') ?>
<?php 
  if(isset($_GET['post-slug'])){
    $post = getPost($_Ge['post-slug']);

  }
  $topics =getallTopics();
?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
        <?php if($post['published']==false): ?>
          <h1 class="post-title">Sorry..This post has not been published</h1>
          <?php else: ?>
            <h1 class="post-title"><?php echo $post['title']; ?></h1>
          <div class="post-content">
            <p><?php echo html_entity_decode($post['body']); ?></p>
          </div>
       <?php endif ?>
        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        <div class="fb-page" data-href="https://web.facebook.com/codingpoets/" data-small-header="false"
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://web.facebook.com/codingpoets/" class="fb-xfbml-parse-ignore"><a
              href="https://web.facebook.com/codingpoets/">Coding Poets</a></blockquote>
        </div>


        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <div class="post clearfix">
            <img src="images/image_1.png" alt="">
            <a href="" class="title">
              <h4>How to overcome your fears</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="images/image_1.png" alt="">
            <a href="" class="title">
              <h4>How to overcome your fears</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="images/image_1.png" alt="">
            <a href="" class="title">
              <h4>How to overcome your fears</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="images/image_1.png" alt="">
            <a href="" class="title">
              <h4>How to overcome your fears</h4>
            </a>
          </div>
          <div class="post clearfix">
            <img src="images/image_1.png" alt="">
            <a href="" class="title">
              <h4>How to overcome your fears</h4>
            </a>
          </div>

        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>
      </div>
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include 'footer.php'?>