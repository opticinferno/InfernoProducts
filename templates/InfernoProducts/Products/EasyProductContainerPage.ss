<div id="content" class="container">
       <% if $EnquiryForm == '1' %>
        <div class="col-lg-3">
        	<a class="btn btn-primary btn-lg btn-block hidden-md hidden-lg" role="button" href="#Enquiry" data-toggle="collapse" aria-expanded="false" aria-controls="Enquiry"><span class="glyphicon glyphicon-star"></span> Enquiry</a>
       <% include enquiryform %>
        </div>
         <div class="col-lg-9 col-sm-12 content" role="main">
        	$ElementalArea
            <% include InfernoProducts/Products/ContainerPage %>

        </div>
        <% else %>
           <div class="col-lg-12 col-sm-12 content" role="main">
               $ElementalArea
            <% include InfernoProducts/Products/ContainerPage %>

        </div>
        <% end_if %>
</div>







