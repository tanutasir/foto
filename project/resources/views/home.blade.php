@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Upload</div>

                <div class="panel-body">
                    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="fileupload-buttonbar">
                            <div class="fileupload-buttons">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="fileinput-button">
                <span>Add files...</span>
                <input type="file" name="files[]" multiple>
            </span>
                                <button type="submit" class="start">Start upload</button>
                                <button type="reset" class="cancel">Cancel upload</button>
                                <button type="button" class="delete">Delete</button>
                                <input type="checkbox" class="toggle">
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="fileupload-progress fade" style="display:none">
                                <!-- The global progress bar -->
                                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation"><tbody class="files"></tbody></table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
