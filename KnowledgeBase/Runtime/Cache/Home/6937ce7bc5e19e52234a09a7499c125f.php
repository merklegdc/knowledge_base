<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/KnowledgeBase/Public/icon/favicon.ico">

    <title>Knowledge Base - Article List</title>

    <!-- Bootstrap core CSS -->
    <link href="/KnowledgeBase/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/KnowledgeBase/Public/css/starter-template.css" rel="stylesheet">
	
    <link href="/KnowledgeBase/Public/css/base.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Knowledge Base</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="modal" href="#myModal">Add <span class="sr-only">(current)</span></a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Article List</h1>
        <p class="lead">Mark your favorite articles as liked!<br> </p>
		<table id="table" class="table" >
			<thead class="thead-default">
				<tr>
					<th>Author</th>
					<th>Title</th>
					<th>Subject</th>
					<th>Publish Date</th>
					<th>Likes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					
				</tr>
			</tbody>
		</table>
      </div>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add an article</h4>
		  </div>
		  <div class="modal-body">
			<form action="addArticle">
			  <div class="form-group">
				<label for="author">Author name:</label>
				<input type="text" class="form-control" id="author">
			  </div>
			  <div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title">
			  </div>
			  <div class="form-group">
				<label for="subject">Subject:</label>
				<select type="text" class="form-control" id="subject">
				  <option value="Shell">Shell</option>
				  <option value="Informatica">Informatica</option>
				  <option value="Big data">Big data</option>
				  <option value="Netezza">Netezza</option>
				  <option value="SQL Server">SQL Server</option>
				  <option value="QA Methodology">QA Methodology</option>
				  <option value="Tableau">Tableau</option>
				  <option value="Net spider">Net spider</option>
				  <option value="Utilities">Utilities</option>
				  <option value="Python">Python</option>
				  <option value="PHP">PHP</option>
				  <option value="Java">Java</option>
				  <option value="SAS">SAS</option>
				  <option value="Case Studies">Case Studies</option>
				  <option value="JavaScript">JavaScript</option>
				  <option value="Other">Other</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="url">URL:</label>
				<input type="text" class="form-control" id="url">
			  </div>
			  <div class="form-group">
				<label for="date">Date:</label>
				<input type="date" class="form-control" id="create_date">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-default" id="add_article">Submit</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

    </div><!-- /.container -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/KnowledgeBase/Public/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/KnowledgeBase/Public/js/tether.min.js"></script>
    <script src="/KnowledgeBase/Public/js/bootstrap.min.js"></script>
    
	<script type="text/javascript">
		$(document).ready(function() {
			$.get("getAll",function(data,status){
				var arr = data.data
				jQuery.each(arr, function() {
					if (this.like_flag=='Y') {
						var cls = "like_button"
						var title = "liked"
					}else{
						var cls = "unlike_button"
						var title = "like this article"
					}
					//$("tbody").append("<tr><th>"+this.author+"</th><th>"+this.title+"</th><th>"+this.dt+"</th><th><ul><li><button type='button' id='"+this.article_id+"' class='"+cls+"'><span id='SPAN_2'>"+this.vote+"</span></button></li><li><div class='bubble'></div></li></ul></th></tr>");
					$("tbody").append("<tr><th>"+this.author+"</th><th><a href='"+this.url+"'>"+this.title+"</a></th><th>"+this.subject+"</th><th>"+this.dt+"</th><th><button type='button' id='"+this.article_id+"' class='"+cls+"' data-animation='false' data-toggle='tooltip' title='"+title+"' data-placement='right'><span id='SPAN_2'>"+this.vote+"</span></button></th></tr>");
				});
				$("button.like_button, button.unlike_button").click(function(){
					var vote = $(this).children("span").text();
					if ($(this).hasClass("like_button")){
						//$(this).removeClass("like_button");
						//$(this).addClass("unlike_button");
						//$(this).children("span").text(parseInt(vote)-1);
						//$(this).tooltip('dispose');
						//$(this).tooltip({title:"like this article",trigger: "hover"})
						//$(this).attr("title","like this article");
						//$("body").tooltip({ selector: '[data-toggle=tooltip]' });
						//submit("N",$(this).attr("id"));
						return;
					}
					if ($(this).hasClass("unlike_button")){
						$(this).removeClass("unlike_button");
						$(this).addClass("like_button");
						$(this).children("span").text(parseInt(vote)+1);
						$(this).tooltip('dispose');
						//$(this).tooltip({title:"unlike",trigger: "hover"})
						$(this).attr("title","liked");
						$("body").tooltip({ selector: '[data-toggle=tooltip]' });
						submit("Y",$(this).attr("id"));
						return;
					}
				});
			})
			$("body").tooltip({ selector: '[data-toggle=tooltip]',trigger: "hover" });
			$("#add_article").click(function(){
				$.get("addArticle?author="+$("input#author").val()+"&title="+$("input#title").val()+"&url="+$("input#url").val()+"&subject="+$("select#subject").val()+"&create_date="+$("input#create_date").val(),function(data,status){
					$("input").val("");
					$('#myModal').modal('hide');
					//location.reload();
				})
			});
			
		} );
		var submit = function(like_flag,article_id){
			$.get("updateFlag?like_flag="+like_flag+"&article_id="+article_id,function(data,status){})
		}
		
	</script>
  </body>
</html>