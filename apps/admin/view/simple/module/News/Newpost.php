
{$Header}

<link rel="stylesheet" href="{$static_url}/jquery/datepicker/css/datepicker.css">
<link rel="stylesheet" href="{$static_url}/jquery/timepicker/css/bootstrap-timepicker.css">
{if $editor == 'markdown'}
<link rel="stylesheet" href="{$static_url}/plugin/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" href="{$static_url}/plugin/bootstrap-markdown/css/reset-css-review.css">
{/if}

<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="{$static_url}/jquery/upload/css/jquery.fileupload.css">
<link rel="stylesheet" href="{$static_url}/jquery/upload/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="{$static_url}/jquery/upload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="{$static_url}/jquery/upload/css/jquery.fileupload-ui-noscript.css"></noscript>
<style>
/* Hide Angular JS elements before initializing */
.ng-cloak {
    display: none;
}
</style>

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
		    	<!-- Large modal -->
				<div class="head-param">
					<input type="hidden" name="editor" value="{$editor}" />

					<div class="section">
						<button class="btn btn-primary" data-toggle="modal" data-target=".ypmedia">Media</button>
					</div>
					

					<div class="section">
						<input type="text" name="tag" value="{$post.tag}" placeholder="Tag name..." class="tag-input">
					</div>

					<div class="rightside">
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
							</div>

							<div class="form-group pub-date">
								<label for="pub-date">Pub Date</label>
								<input type="text" class="span2" value="01/01/2014" data-date-format="mm/dd/yyyy" id="pub-date"> @
								<input type="text" class="span1" value="" id="pub-time">
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
						<form id="fileupload" action="#" method="POST" enctype="multipart/form-data" data-ng-app="ypMedia" data-ng-controller="ypMediaUploader" data-file-upload="options" data-ng-class="\{'fileupload-processing': processing() || loadingFiles\}">
						    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
						    <div class="row fileupload-buttonbar">
						        <div class="col-lg-7">
						            <!-- The fileinput-button span is used to style the file input field as button -->
						            <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
						                <i class="glyphicon glyphicon-plus"></i>
						                <span>Add files...</span>
						                <input type="file" name="files[]" multiple ng-disabled="disabled">
						            </span>
						            <button type="button" class="btn btn-primary start" data-ng-click="submit()">
						                <i class="glyphicon glyphicon-upload"></i>
						                <span>Start upload</span>
						            </button>
						            <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
						                <i class="glyphicon glyphicon-ban-circle"></i>
						                <span>Cancel upload</span>
						            </button>
						            <!-- The global file processing state -->
						            <span class="fileupload-process"></span>
						        </div>
						        <!-- The global progress state -->
						        <div class="col-lg-5 fade" data-ng-class="{in: active()}">
						            <!-- The global progress bar -->
						            <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
						            <!-- The extended global progress state -->
						            <div class="progress-extended">&nbsp;</div>
						        </div>
						    </div>
						    <!-- The table listing the files available for upload/download -->
						    <table class="table table-striped files ng-cloak">
						        <tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
						            <td data-ng-switch data-on="!!file.thumbnailUrl">
						                <div class="preview" data-ng-switch-when="true">
						                    <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
						                </div>
						                <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
						            </td>
						            <td>
						                <p class="name" data-ng-switch data-on="!!file.url">
						                    <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
						                        <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
						                        <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
						                    </span>
						                    <span data-ng-switch-default>{{file.name}}</span>
						                </p>
						                <strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
						            </td>
						            <td>
						                <p class="size">{{file.size | formatFileSize}}</p>
						                <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
						            </td>
						            <td>
						                <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
						                    <i class="glyphicon glyphicon-upload"></i>
						                    <span>Start</span>
						                </button>
						                <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
						                    <i class="glyphicon glyphicon-ban-circle"></i>
						                    <span>Cancel</span>
						                </button>
						                <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
						                    <i class="glyphicon glyphicon-trash"></i>
						                    <span>Delete</span>
						                </button>
						            </td>
						        </tr>
						    </table>
						</form>
					{/literal}
					<!-- -  / Upload media  - -->
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>



		</section>
	</form>
</main>

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

<script type="text/javascript" src="{$static_url}/javascript/jquery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$static_url}/javascript/bootstrap/bootstrap-modal.js"></script>

<script type="text/javascript" src="{$static_url}/jquery/textext/js/textext.core.js"></script>
<script type="text/javascript" src="{$static_url}/jquery/textext/js/textext.plugin.tags.js"></script>
<script type="text/javascript">
	$('#tags')
		.textext({
			plugins : 'tags autocomplete'
		})
		.bind('getSuggestions', function(e, data)
		{
			var list = [
					'Basic',
					'Closure',
					'Cobol',
					'Delphi',
					'Erlang',
					'Fortran',
					'Go',
					'Groovy',
					'Haskel',
					'Java',
					'JavaScript',
					'OCAML',
					'PHP',
					'Perl',
					'Python',
					'Ruby',
					'Scala'
				],
				textext = $(e.target).textext()[0],
				query = (data ? data.query : '') || ''
				;

			$(this).trigger(
				'setSuggestions',
				{ result : textext.itemManager().filter(list, query) }
			);
		})
		;
</script>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{$static_url}/jquery/upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<script src="{$static_url}/jquery/upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload Angular JS module -->
<script src="{$static_url}/jquery/upload/js/jquery.fileupload-angular.js"></script>
<script>

(function () {
    'use strict';

        var url = 'server/php/';

    angular.module('ypMedia', [
        'blueimp.fileupload'
    ])
        .config([
            '$httpProvider', 'fileUploadProvider',
            function ($httpProvider, fileUploadProvider) {
                delete $httpProvider.defaults.headers.common['X-Requested-With'];
                fileUploadProvider.defaults.redirect = window.location.href.replace(
                    /\/[^\/]*$/,
                    '/cors/result.html?%s'
                );
            }
        ])

        .controller('ypMediaUploader', [
            '$scope', '$http', '$filter', '$window',
            function ($scope, $http) {
                $scope.options = {
                    url: url
                };

                $scope.loadingFiles = true;
                $http.get(url)
                    .then(
                        function (response) {
                            $scope.loadingFiles = false;
                            $scope.queue = response.data.files || [];
                        },
                        function () {
                            $scope.loadingFiles = false;
                        }
                    );

            }
        ])

        .controller('FileDestroyController', [
            '$scope', '$http',
            function ($scope, $http) {
                var file = $scope.file,
                    state;
                if (file.url) {
                    file.$state = function () {
                        return state;
                    };
                    file.$destroy = function () {
                        state = 'pending';
                        return $http({
                            url: file.deleteUrl,
                            method: file.deleteType
                        }).then(
                            function () {
                                state = 'resolved';
                                $scope.clear(file);
                            },
                            function () {
                                state = 'rejected';
                            }
                        );
                    };
                } else if (!file.$cancel && !file._index) {
                    file.$cancel = function () {
                        $scope.clear(file);
                    };
                }
            }
        ]);

}());

</script>


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
$("#post_content").markdown({
  additionalButtons: [
    [{
          name: "groupCustom",
          data: [{
            name: "breakPage",
            toggle: true, // this param only take effect if you load bootstrap.js
            title: "Break page",
            icon: "glyphicon glyphicon-flash",
            callback: function(e){
              // Replace selection with some drinks
              var _break, cursor,
                  selected = e.getSelection(), content = e.getContent(),

                  //index = Math.floor((Math.random()*10)+1)


              // Give random drink
              _break = "//------"

              // transform selection and set the cursor into chunked text
              e.replaceSelection(_break)
              cursor = selected.start

              // Set the cursor
              e.setSelection(cursor,cursor+chunk.length)
            }
          }]
    }]
  ]
})
</script>
{/if}