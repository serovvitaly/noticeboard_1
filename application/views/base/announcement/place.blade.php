<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
        <div style="height: 300px; background: #FFF; padding: 10px;">
          <form action="">
            <div style="padding-bottom: 10px;"><a href="#"  id="example200" class="btn btn-small dropdown-toggle" data-toggle="dropdown" rel="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Категория"><i class="icon-align-justify"></i> Категория</a></div>
            <input style="width: 70%;" type="text" placeholder="Заголовок"><br/>
            <textarea style="width: 70%; height: 100px;" cols="" rows="" placeholder="Описание"></textarea>
            
            <div class="btn-toolbar" style="margin: 0;">
              <div class="btn-group">
                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Регион <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Город <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div>
            
          </form>
        </div>
    </div>
    <div class="item">
        <div style="height: 300px; background: #F0F0F0;">step 2</div>
    </div>
    <div class="item">
        <div style="height: 300px; background: #F0F0F0;">step 3</div>
    </div>
  </div>
</div>
<div>
  <a class="btn" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="btn" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#myCarousel').carousel({
            interval: false
        });
        $('#example200').popover();    
    })
    
</script>