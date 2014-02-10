
{$Header}

<main role="main" id="main" contenteditable="false">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}</div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}</div>{/if}
	</aside>

	<form action="{$form_action}" method="POST">
		{if $post}
			<input type="hidden" name="post_id" value="{$post.post_id}" />
			<input type="hidden" name="title_alias" value="{$post.title_alias}" />
		{/if}
		<section class="entry-container" ng-app="ypEditor" ng-controller="__ypEditor">
			<header>
				<section class="box entry-title-editor">
			         <input class="" type="text" name="post_title" value="{$post.title}" placeholder="Post title here..."  autofocus="autofocus" />
			    </section>
			</header>

		    <section class="entry-container">
		    	<textarea name="post_content" 
		    		id="post_content" 
		    		rows="40" cols="200"
		    		style="width: 100%; border:0">
		    	{htmlspecialchars_decode($post.post)}
		    	</textarea>	
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
							</div>

							<div class="form-group">
								<label for="pub-date">Pub Date</label>
								<input type="date" class="form-control" id="pub-date" placeholder="24 Jan 14 @ 19:01" name="post_date" value="{$post.post_date}">
							</div>

							<div class="form-group">
								<label for="keyword">Pub Date</label>
								<input type="text" class="form-control" id="keyword" placeholder="Post keyword" name="keyword" value="{$post.keyword}">
							</div>

							<div class="form-group">
								{if isset($post.post_id)}<a href="./Delete?id={$post.post_id}&submit=1" onclick="return confirm('Are you sure?'); "><i class="delete"></i> Delete this post?</a> {/if}
							</div>

						</div>
					</div>
				</div>
			</div>

			<footer id="publish-bar">
			    <nav>
			        <section id="entry-tags" href="#" class="left">
			            <input class="tag-input" id="tags" type="text" name="tag" value="{$post.tag}" placeholder="Post tag">
			        </section>

			        <div class="right">

			            <section id="entry-controls" class="unsaved">
			                <a class="post-settings" href="#" data-toggle="modal" data-target="#modalSetting" title="Post Settings"><span class="hidden">Post Settings</span></a>
			                



			            </section>

			            <section id="entry-actions" class="entry-submit-post">
			                <button type="submit" class="save-draft-button" data-loading-text="Loading..." name="submit" value="save-draft">Save Draft</button>
			                <button type="submit" class="publish-button" data-loading-text="Saving..." name="submit" value="publish-now">Publish Now</button>
			                
			                <ul class="editor-options overlay" style="display: none;">
			                </ul>
			            </section>
			        </div>
			    </nav>
			</footer>

		</section>
	</form>
</main>

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

<script type="text/javascript" src="{$static_url}/javascript/jquery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$static_url}/javascript/bootstrap/bootstrap-modal.js"></script>
<script type="text/javascript" src="{$static_url}/javascript/jquery/jquery.tagsinput.min.js"></script>
<script type="text/javascript">
	//$('#tags').tagsInput();
</script>
<script>
function makeDeleteSure() {
	return confirm('Are you sure to delete this post?');
}
</script>