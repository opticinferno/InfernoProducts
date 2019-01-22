<div id="content" class="container">
   <div class="row">
            <!--Sidebar on left-->
            <div class="col-md-3 col-xs-12">

            <%--<% include Sidebar %>--%>
            <br>
           <a class="btn btn-primary btn-lg btn-block hidden-md hidden-lg" role="button" href="#Enquiry" data-toggle="collapse" aria-expanded="false" aria-controls="Enquiry"><span class="glyphicon glyphicon-star"></span> Enquiry</a>
       <%--<% include enquiryform %><br>--%>

            </div>
            <div class="col-sm-12 col-xs-12 col-md-9" role="main">

            <div class="col-md-12">
            <br>
            <img id="imgsub" src="$ProductPic.CroppedImage(800,300).URL"  class="img-responsive">
            <br>
             <% if $Brochure %>
            <div class="row">
                <% with $Brochure %>
                <div class="col-sm-12">
                <div class="brochurebtn">
                    <a href="$URL" class="btn btn-success" target="_blank"><i class="fa fa-download"></i> Download brochure ($Size)($Extension)</a>
                    <br>
                </div>
                <% end_with %>
            </div>
            </div>
            <% end_if %>
            </div>




                <div class="col-md-12">
                $Content
                $Form
                $PageComments
                <div id="gallery"  >
                <% include PhotoGallery %>
                </div>

            </div>




    </div>

    </div>
</div>






