
{$Header}

<link rel="stylesheet" href="{$static_url}/jquery/datepicker/css/datepicker.css">
<link rel="stylesheet" href="{$static_url}/jquery/timepicker/css/bootstrap-timepicker.css">
{if $editor == 'markdown'}
<link rel="stylesheet" href="{$static_url}/plugin/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" href="{$static_url}/plugin/bootstrap-markdown/css/reset-css-review.css">
{/if}

<link rel="stylesheet" type="text/css" href="{$static_url}/jquery/upload/uploadify.css">



<main role="main" id="main" contenteditable="false">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}<a href="#" class="close"></a></div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}<a href="#" class="close"></a></div>{/if}
	</aside>

	<form action="{$form_action}" method="POST">
		{if $post}
			<input type="hidden" name="post_id" value="{$post.post_id}" />
			<input type="hidden" name="title_alias" value="{$post.title_alias}" />
		{/if}
		<section class="entry-container" ng-app="ypEditor" ng-controller="__ypEditor">
			<header>
				<section class="box entry-title-editor">
			         <input class="" type="text" name="post_title" id="post_title" value="{$post.title}" placeholder="Post title here..."  autofocus="autofocus" />
			    </section>
			</header>

			<!-- Post nav -->
		    <section class="entry-container">
				<div class="head-param">
					<input type="hidden" name="editor" value="{$editor}" />

					<div class="section">
						<button class="btn btn-primary" data-toggle="modal" data-target=".ypmedia">Media</button>
					</div>
					

					<div class="section">
						<input type="text" name="tag" value="{$post.tag}" placeholder="Tag name..." class="tag-input">
					</div>

					<div class="rightside">
							<!-- Select Editor -->
							Editor: <a href="./?editor={if $editor == 'ckeditor'}markdown{else}ckeditor{/if}">Use {if $editor == 'ckeditor'}Markdown{else}CkEditor{/if}</a>
							<a class="post-settings" href="#" data-toggle="modal" data-target="#modalSetting" title="Post Settings"><span class="hidden">Post Settings</span></a>
			                <button type="submit" class="" data-loading-text="Loading..." name="submit" value="save-draft">Save Draft</button>
			                <button type="submit" class="publish-button" data-loading-text="Saving..." name="submit" value="publish-now">Publish Now</button>
					</div>
				</div>
		    	<textarea name="post_content" 
		    		id="post_content" 
		    		rows="20" cols="300"
		    		{if $editor == 'markdown'}data-provide="markdown"{/if}
		    		style="width: 100% !important; border:0; display: ;">{htmlspecialchars_decode($post.post)}</textarea>	
		    </section>

		    <!-- Modal Setting -->
			<div class="modal fade bs-modal-sm" id="modalSetting" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
							<h4 class="modal-title" id="myModalLabel">Post setting</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="url">URL</label>
								<input type="text" class="form-control" id="url" placeholder="URL" name="title_alias" value="{$post.title_alias}">
								<a href="javascript: void(0);" id="ypGetAlias">F5</a> 
							</div>

							<div class="form-group pub-date">
								<label for="pub-date">Pub Date</label>
								<input type="checkbox" name="pub-time-auto" id="pub-time-auto" value="1" onselect="document.custom_date_panel.display = 'normal'"> Auto <br />
								<div id="custom_date_panel" {if $isCustomDate}style="display:none;"{/if}>
									<input type="text" class="span2" name="pub-date" value="{$pub_date}" data-date-format="mm-dd-yyyy" id="pub-date"> @
									<input type="text" class="span1" id="pub-time" value="{$pub_time}" id="pub-time">
								</div>
							</div>

							<div class="form-group">
								<label for="keyword">Key words</label>
								<input type="text" class="form-control" id="keyword" placeholder="Post keyword" name="keyword" value="{$post.keyword}">
							</div>

							<div class="form-group">
								{if isset($post.post_id)}<a href="./Delete?id={$post.post_id}&submit=1" onclick="return confirm('Are you sure?'); "><i class="delete"></i> Delete this post?</a> {/if}
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End modal setting -->
			
			<!-- Model Upload -->
			<!-- Large modal -->
			<div class="modal modal-lg fade ypmedia" id="ypMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
			        <h4 class="modal-title" id="myModalLabel">ypCore Media</h4>
			      </div>
			      <div class="modal-body" >
			       	<!-- -  Upload media  - -->
			       	{literal}
						<form>
							<div id="queue"></div>
							<input id="file_upload" name="file_upload" type="file" multiple="true">
							<a href="javascript:$('#file_upload').uploadify('upload','*')">Upload Files</a>
							<div id="images_uploaded"></div>
						</form>
					{/literal}
					<!-- -  / Upload media  - -->
			      </div>
			      <div class="modal-footer">

			      </div>
			    </div>
			  </div>
			</div>
		</section>
	</form>
</main>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{$static_url}/javascript/jquery/jquery-1.9.1.js"><\/script>')</script>



{if $editor == 'ckeditor'}
<script type="text/javascript" src="{$static_url}/javascript/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = {
	height: '320px',
	filebrowserBrowseUrl : '{$static_url}/../plugin/pdw_file_browser/index.php',
	filebrowserImageBrowseUrl : '{$static_url}/../plugin/pdw_file_browser/index.php?filter=image',
	filebrowserFlashBrowseUrl : '{$static_url}/../plugin/pdw_file_browser/index.php?filter=flash',
};
	CKEDITOR.replace('post_content', config);
</script>
{/if}


<script src="{$static_url}/jquery/upload/jquery.uploadify.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$('#file_upload').uploadify({
			'formData'     : {
				'timestamp' : '{time()}',
				'token'     : '{md5('unique_salt' + time())}'
			},
			'swf'      : '{$static_url}/jquery/upload/uploadify.swf',
			'uploader' : '{$static_url}/jquery/upload/uploadify.php',
			'auto' : 0,
			'onQueueComplete' : function(uploads) {
           		//alert(uploads.successful + ' files were uploaded successfully.');
       		},
			'onUploadComplete' : function(file, data) {
				
			},
			hideButton:0, successTimeout:999, wmode:"transparent", buttonClass: "button-add",
			buttonText:"+ Chọn hình",
			fileTypeDesc:"Image Files",
			fileTypeExts:"*.jpg; *.png",
			multi: 1,
			onSelect: function(){},
			onUploadError: function(n,t,i,r){
				alert(r);alert(t)
			},
			onUploadStart: function(){},
			onUploadSuccess: function(file, data, response){
				$('#images_uploaded').load('Admin/News/Upload/List?session={md5('unique_salt' + time())}');
			},

		});
	});
</script>


<script type="text/javascript" src="{$static_url}/javascript/bootstrap/bootstrap-modal.js"></script>

<script src="{$static_url}/jquery/datepicker/js/bootstrap-datepicker.js"></script>
<script>$('#pub-date').datepicker()</script>
<script src="{$static_url}/jquery/timepicker/js/bootstrap-timepicker.min.js"></script>
<script>
$('#pub-time').timepicker({
    minuteStep: 5,
    showInputs: false,
    disableFocus: true
});</script>

{if $editor == 'markdown'}
<!-- Markdown Editor -->
<script src="{$static_url}/plugin/bootstrap-markdown/js/markdown.js"></script>
<script src="{$static_url}/plugin/bootstrap-markdown/js/to-markdown.js"></script>
<script src="{$static_url}/plugin/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script>
$("#post_content").markdown();
</script>
{/if}

<script>
if ($('#pub-time-auto').attr("checked")) {
	$('#custom_date').slideDown(400);
} else {
	$('#custom_date').slideUp(400);
}
</script>

<script>
	$('#ypGetAlias').click(function(){
		var post_title = $('#post_title').val();
		$.ajax({
			url: "{$ajax_get_alias_url}",
			type: "POST",
			data: { title: post_title }
		}).done(function(data) {
			$('#url').val(data);
		});
	});

</script>
{$Footer}