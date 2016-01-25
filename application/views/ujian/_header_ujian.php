<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="min-height: 10px; background-color: #FFFFFF; box-shadow: 0 1px 0px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="container" style="">
      <p class="navbar-text navbar-right" style="margin-bottom: 2px; margin-top: 5px;">
      	<button class="btn btn-default" onclick="sync_jawaban();" style="color: #2489C5; font-size: 20px;">sync</button>
      	<button class="btn btn-default" onclick="save_jawaban_button();" style="color: #2489C5; font-size: 20px;">save</button>
      	<button class="btn btn-default" onclick="logout();" style="color: #2489C5; font-size: 20px;">log out</button></p>
      <p class="text-center" id="info" style="margin-bottom: 2px; margin-top: 2px; color: rgb(197, 194, 194); position: absolute; left: 47%; top: 5px;"><span id="clock" style="color:#2489C5; font-size: 20px;">0:00:00</span></p>
      <ul id="pagination-demo" class="pagination-sm" style="margin-bottom: 2px; margin-top: 6px;"></ul>
  </div>
</nav>