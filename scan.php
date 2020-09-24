<html>
<head>
  <style>
  @import "compass/css3";

@import "compass/utilities/links/unstyled-link";
body{
  font-family: 'Raleway', sans-serif;
  background:url("http://www.wallpapersin.net/wallpapers/2013/03/Tokyo-Skyscrapers-485x728.jpg");

}
a{
  @include unstyled-link();
  color:#00BBBB;
  &:hover{
      color:#666;
  }
}
#container{
  width:400px;
  height:500px;
  @include box-shadow(#999 2px 2px 10px);
  margin:0px auto;
}
.image{
  height:275px;
  background: center center no-repeat;
  background-size:cover;
}
.info{
  height:175px;
  background:#FAFAFA;
  text-align:center;
  h1.name{
    text-transform:uppercase;
    margin:0px;
    font-weight: 400;
    letter-spacing: 3px;
    color: #5C5B5B;
    font-size: 30px;
    padding: 25px 0px 0px 0px;
  }
  h3.position{
    margin:0px;
  }
  p{
    color:#666;
    padding:0px 60px;
  }
}
.social{
  height:40px;
  background:#DAE0DE;
  text-align:center;
  padding-top:20px;
  i{
    font-size:20px;
  }
  a{
    margin:0px 10px;
    color:#666;
    &:hover{
      color:#00BBBB;
    }
  }
}
</style>
</head>
<body>
  <div id="container">
    <div class="image" style="background-image: url(https://25.media.tumblr.com/f9cd81645ebd2f0904227b42784bbfae/tumblr_mj6r7nBfdV1s7aky5o2_r1_1280.jpg)"></div>
    <div class="info">
      <h1 class="name">panda smith</h1>
      <h3 class="position"><a href="#">Creative director</a></h3>
      <p>Large bet on myself in round one pansy i more, but you go</p>
    </div>
    <div class="social">
      <a href=""><i class="icon-twitter"></i></a>

      <a href=""><i class="icon-linkedin"></i></a>

      <a href=""><i class="icon-facebook"></i></a>

      <a href=""><i class="icon-google-plus"></i></a>

      <a href=""><i class="icon-github-alt"></i></a>
    </div>
  </div>
</body>
</html>
