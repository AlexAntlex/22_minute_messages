<style>
  #header {
    background: url(../assets/main.jpg) center center / cover no-repeat ;
  }

  body{
  background: -webkit-linear-gradient(left, #d3eef2, #b3efd9);
}
</style>

<div class="container">
  <div class="row">
    <div class="col-9">
      <h2><?=$article['title']?></h2>
      <p><?=$article['dt']?></p>
    </div>
    <div class="col-4">
    <div class="card">
      <img src="../<?=$article['img_path']?>" class="rounded float-start" alt="">
    </div>
    </div>
    <div class="col-6">
      <p style="width: 230px; padding: 10px; word-wrap: break-word;"><?=$article['content']?></p>
    </div>
  </div>
</div>




     

