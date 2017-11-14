<?php require ('inc/header.php')?>

<section>
  <div>
  
    <!-- slideshow -->
    <div class="main-slideshow">
      
      <?php for ($i=1; $i <= 4 ; $i++) { ?>
      <!-- one slide -->
      <div class="main-slideshow-list">
        <a class="leading-image clearenter" href="javascript:void(0)">
          <img data-lazy="img/sample/slide-<?php echo rand(1, 4); ?>.jpg" />
          <div class="slide-overlay"></div>
          <div class="slide-content">
            <div class="slide-title">
              <h2>Hankyu Hanshin Express</h2>
			  <div class="read-more">
			    <span>
			      <div class="more-icon content_center"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
			      <div class="more-name">Learn More</div>
				</span>
			  </div>
            </div>
          </div>
        </a>
      </div>  
      <!-- end one slide --> 
      <?php } ?>  
    
    </div> 
    <!-- end slideshow -->
    
    
    
    <!-- about -->
    <div class="module index-about">
      <div>
        <div class="module-title">
          <h3>Welcome To Hakyu Hanshin Express</h3>
          <span class="bar"></span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sollicitudin tristique scelerisque. Praesent vitae consectetur tortor, ut faucibus ligula. Nam commodo nibh sit amet elit volutpat maximus. Proin tincidunt cursus finibus. Proin vehicula justo auctor rhoncus ullamcorper. Nulla sapien erat, blandit et bibendum non, tincidunt nec erat. Phasellus nec sem sed arcu tincidunt viverra. Morbi sodales odio quis nisi sollicitudin, vitae dignissim ipsum euismod. Duis at libero neque. Vivamus ac nisl non purus fringilla bibendum. Nam a euismod enim. In eu tellus nunc. In nec dui diam.</p>
        <p>Proin sed ligula sollicitudin arcu lobortis convallis eu vitae orci. Aliquam euismod, lacus et blandit lacinia, ipsum dolor tincidunt nisl, eu rhoncus nunc augue nec magna. Pellentesque varius urna luctus lorem molestie, vel eleifend nulla vehicula. Sed sed sem in nibh sollicitudin ultricies. Nunc varius convallis mauris eu pretium. Donec ipsum velit, placerat dignissim pellentesque eu, facilisis semper dolor. Suspendisse ac tristique diam, at luctus nunc. Donec malesuada cursus erat cursus malesuada. Fusce ultrices turpis risus, vel condimentum augue gravida vitae. Phasellus non purus ac mauris facilisis interdum. Integer nisl ante, mollis vitae lacinia ut, luctus sed massa.</p>
      </div>
    </div>
    <!-- end about -->
    
    
    
    <!-- tracking bar -->
    <div class="module tracking-bar">
      <div>
        <div class="tracking-box">
          <div class="tracking-name content_center">
            <span>Tracking System</span>
          </div>
          
          <div class="tracking-field  content_center">
            <input name="field" type="text" placeholder="Insert Tracking Code Here" />
          </div>
          
          <div class="tracking-submit">
            <span>
              <input name="submit" type="button" class="btn" value="Submit" />
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- end tracking bar -->
    
    
    
    <!-- news box -->
    <div class="module news-box">
      <div>
        <div class="module-title">
          <h3>Our Service</h3>
          <span class="bar"></span>
        </div>
        <ul>
          <?php for ($i=1; $i <= 4 ; $i++) { ?>
          <li>
            <div class="news-box-detail">
              <a href="javascript:void(0)">
                <div class="news-thumb flex_lazy"><img data-original="img/sample/slide-<?php echo rand(1, 4); ?>.jpg" /></div>
                <div class="news-title"><h2>Lorem Ipsum Dolor Sit Amet</h2></div>
                <div class="news-sum">Consectetur adipiscing elit. Nam sollicitudin tristique scelerisque. Praesent vitae consectetur tortor, ut faucibus ligula. Nam commodo nibh sit amet elit volutpat maximus.</div>
              </a>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- end news box -->
	
	
	
	<!-- news list -->
    <div class="module news-list">
      <div>
        <div class="module-title">
          <h3>Our News</h3>
          <span class="bar"></span>
        </div>
        <ul>
          <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <li>
            <div class="news-list-detail">
              <a href="javascript:void(0)">
                <div class="news-thumb flex_lazy"><img data-original="img/sample/slide-<?php echo rand(1, 4); ?>.jpg" /></div>
                <div class="news-title"><h2>Lorem Ipsum Dolor Sit Amet</h2></div>
                <div class="news-sum">Consectetur adipiscing elit. Nam sollicitudin tristique scelerisque. Praesent vitae consectetur tortor, ut faucibus ligula. Nam commodo nibh sit amet elit volutpat maximus.</div>
              </a>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- end news list -->
    
  </div>
</section>

<?php require ('inc/footer.php')?>