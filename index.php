<?php get_header(); ?>


  <div ng-view>




  <div ng-controller="indexController" class="container">
    <!-- display all post titles in a list -->

        <div class="blog-post" ng-repeat="post in postdata">
            <h2 class="blog-post-title">{{post.title}}</h2>
            <p class="blog-post-meta">{{post.date}} by <a href="#">{{post.author.name}}</a></p>
            <div ng-bind-html="post.content">
            </div>
          </div>

          <hr>

  </div>



</div>






<?php get_footer(); ?>
