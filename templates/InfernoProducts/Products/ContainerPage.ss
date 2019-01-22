<div class="row">
<% loop $Children %>

<div class="col-sm-4 col-xs-12" role="main"> 
<div class="panel panel-default">
  <div class="panel-heading">$Title </div>
  <div class="panel-body">
    <a href="$Link"><img class="img-responsive"  src="$ProductPic.URL"/></a>
    <p> </p>
    <p class="offers-container-text">$Content.LimitWordCountXML(20) </p>
   <a href="$Link"> <button class="btn btn-default btn-block"> View  </button></a> 
  </div>
</div>
</div>

<% end_loop %>
</div>