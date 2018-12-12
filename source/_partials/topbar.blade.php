<nav class="topnav nav nav-underline navbar-dark text-white">
  <div class="container-fluid d-flex justify-content-between align-items-center w-100">
    <ul class="">
      <li><a class="nav-link" href="{{ $page->baseUrl }}/index.html">Homepage</a></li>
      <!-- <li class="float-right"><a class="nav-link" href="{{ $page->baseUrl }}/timeline/index.html">Timeline</a></li> -->
    </ul>
  </div>
</nav>

<nav class="topnav nav nav-underline navbar-light">
  <div class="container-fluid d-flex">
    <ul>
      <!-- com.omniupdate.div label="top-nav" group="TOP_Nav" button="792" path="/includes/top-nav.inc" break="break" -->
      <li><a title="Bulldog Athletics Official Site" onclick="ga('send','event','Top Nav', 'Athletics');" href="http://athletics.hancockcollege.edu/"
          target="_blank">Athletics</a></li>
          <li><a href="/library/index.php">Library</a></li> 
      <li><a title="Allan Hancock Bookstore Site" onclick="ga('send','event','Top Nav', 'Bookstore');" href="/asbg/bookstore.php">Bookstore</a></li>
      <li><a href="#">Employment</a></li>
      <li><a href="/foundation/index.php">AHC Foundation</a></li>
      <li><a href="/public_affairs/directories.php">Directories</a></li>
     
      
      <!-- /com.omniupdate.div -->
    </ul>
    <ul class="secondary-menu">
      <li><a class="btn icon-white purplegradient more-arrow" href="#">Canvas</a></li>
      <li><a class="btn bluegradient more-arrow"  title="myHancock Portal" onclick="ga('send','event','Top Nav', 'myHancock');" href="https://portal.hancockcollege.edu"
        target="_blank"><img src="{{ $page->baseUrl }}/resources/img/logos/my-hancock.png" alt="myHancock" /></a></li>
    </ul>
  </div>
</nav>