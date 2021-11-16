@extends('layouts.admin')

@section('content')


    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">ساخت رزومه</h4>

            <div class="row">
                <div class="col-lg-8">

                    <div class="p-20">
                        <form action="{{route('cv.update',$cv->id)}}" method="post" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="control-label col-sm-2">مقدار زمان فعالیت </label>
                                <div class="col-sm-10">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" value="{{$cv->from}}" placeholder="شروع فعالیت " class="form-control" name="from">
                                        <span class="input-group-addon bg-primary b-0 text-white">تا</span>
                                        <input type="text" value="{{$cv->to}}" placeholder="پایان فعالیت" class="form-control" name="to">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">تایتل</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" value="{{$cv->title}}" class="form-control" placeholder="تایتل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام شرکت</label>
                                    <div class="col-md-10">
                                        <input type="text" name="company" value="{{$cv->company}}" class="form-control" placeholder="نام شرکت ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ادرس اینترنتی</label>
                                    <div class="col-md-10">
                                        <input type="text" name="slug" class="form-control" value="{{$cv->slug}}" placeholder="ادرس اینترنتی شرکت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">توضیحات کار</label>
                                    <div class="col-md-10">
                                        <textarea id="editor"  name="body" class="form-control" placeholder="توضیحات....." rows="5">{{$cv->body}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-xs btn-purple waves-effect waves-light">Block Button</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div><!-- end col -->


            </div><!-- end row-->
        </div>
    </div>
@endsection
@section('js')
<script>
    class MyUploadAdapter {
        constructor( loader ) {
            // The file loader instance to use during the upload. It sounds scary but do not
            // worry — the loader will be passed into the adapter later on in this guide.
            this.loader = loader;
        }
        // Starts the upload process.
        upload() {
            return this.loader.file
                .then( file => new Promise( ( resolve, reject ) => {
                    this._initRequest();
                    this._initListeners( resolve, reject, file );
                    this._sendRequest( file );
                } ) );
        }

        // Aborts the upload process.
        abort() {
            if ( this.xhr ) {
                this.xhr.abort();
            }
        }

        // ...
        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();

            // Note that your request may look different. It is up to you and your editor
            // integration to choose the right communication channel. This example uses
            // a POST request with JSON as a data structure but your configuration
            // could be different.
            xhr.open( 'POST', '/admin/ckeditor_image_upload', true );
            xhr.setRequestHeader('x-csrf-token','{{csrf_token()}}');
            xhr.responseType = 'json';
        }
        // Initializes XMLHttpRequest listeners.
        _initListeners( resolve, reject, file ) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = `Couldn't upload file: ${ file.name }.`;

            xhr.addEventListener( 'error', () => reject( genericErrorText ) );
            xhr.addEventListener( 'abort', () => reject() );
            xhr.addEventListener( 'load', () => {
                const response = xhr.response;

                // This example assumes the XHR server's "response" object will come with
                // an "error" which has its own "message" that can be passed to reject()
                // in the upload promise.
                //
                // Your integration may handle upload errors in a different way so make sure
                // it is done properly. The reject() function must be called when the upload fails.
                if ( !response || response.error ) {
                    return reject( response && response.error ? response.error.message : genericErrorText );
                }

                // If the upload is successful, resolve the upload promise with an object containing
                // at least the "default" URL, pointing to the image on the server.
                // This URL will be used to display the image in the content. Learn more in the
                // UploadAdapter#upload documentation.
                resolve( {
                    default: response.url
                } );
            } );

            // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
            // properties which are used e.g. to display the upload progress bar in the editor
            // user interface.
            if ( xhr.upload ) {
                xhr.upload.addEventListener( 'progress', evt => {
                    if ( evt.lengthComputable ) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                } );
            }
        }
        _sendRequest( file ) {
            // Prepare the form data.
            const data = new FormData();

            data.append( 'upload', file );

            // Important note: This is the right place to implement security mechanisms
            // like authentication and CSRF protection. For instance, you can use
            // XMLHttpRequest.setRequestHeader() to set the request headers containing
            // the CSRF token generated earlier by your application.

            // Send the request.
            this.xhr.send( data );
        }
    }
    function simpleUploadAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            // Configure the URL to the upload script in your back-end here!
            return new MyUploadAdapter( loader );
        };
    }
    ClassicEditor

        .create( document.querySelector( '#editor' ),{
            extraPlugins: [ simpleUploadAdapterPlugin ],
        })
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );



</script>
@endsection
