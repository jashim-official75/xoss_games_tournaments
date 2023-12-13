@extends('backend.layouts.app')

@section('pageName')
    Edit Game
@endsection

@section('styles')
    {{-- File Upload --}}
    <link rel="stylesheet" href="{{ asset('/assets/backend/plugins/dropify/dist/css/dropify.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-30">Edit Game</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('tournament.game.update', $t_game->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label for="game_name">Game Name <span class="text-danger">(required)</span></label>
                                        <input type="text" class="form-control" id="game_name"
                                            placeholder="Enter Gamename" name="game_name" value="{{ $t_game->game_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="game_link">Game Link</label>
                                        <input type="text" class="form-control" id="game_link"
                                            placeholder="Enter Gamename" readonly value="{{ $t_game->game_link }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="game_description">Game Description <span
                                                class="text-danger">(required)</span></label>
                                        <textarea class="form-control" id="game_description" placeholder="Enter Game Description" name="game_description">{{ $t_game->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="game_control">Game Control</label>
                                        <textarea class="form-control" id="game_control" placeholder="Enter Game Control" name="game_control">{{ $t_game->control }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date">Start Date <span
                                                class="text-danger">(required)</span></label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            value="{{ $t_game->start_date }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="end_date">End Date <span class="text-danger">(required)</span></label>
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            value="{{ $t_game->end_date }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="game_fee">Game Fee <span class="text-danger">(required)</span></label>
                                        <input type="number" class="form-control" id="game_fee" name="game_fee"
                                            value="{{ $t_game->game_fee }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="subscription_period">Subscription_period <span
                                                class="text-danger">(required)</span></label>
                                        <input type="text" class="form-control" id="subscription_period"
                                            name="subscription_period" value="{{ $t_game->subscription_period }}">
                                    </div>
                                    <div class="card-body">
                                        <label for="zip" class="mb-4">Game Zip File</label>
                                        <input type="file" id="input-file-max-fs" class="dropify" accept=".zip,.rar"
                                            name="game_zip_file" />
                                        <label for="prev" class="mb-3 mt-3 d-block">Old Game File</label>
                                        <p>{{ $t_game->game_zip_file }}</p>
                                    </div>

                                </div>
                                <div class="offset-sm-1"></div>
                                <div class="col-sm-5 col-xs-5">
                                    <div class="card-body">
                                        <label for="game_thumbnail" class="mb-4">Game Thumbnail
                                            (<span>340x210</span>) </label>
                                        <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M"
                                            name="game_thumbnail" />
                                        <label for="prev" class="mb-4 d-block">Old Game Thumbnail</label>
                                        <img class="img-fluid d-block p-b-30 m-auto"
                                            src="{{ asset('uploads/Tournamant/GameImage/' . $t_game->image) }}"
                                            style="width: 150px;">
                                    </div>
                                    <div class="card-body">
                                        <label for="game_small_icon" class="mb-4">Game Small Icon</label>
                                        <input type="file" id="game_small_icon" class="dropify"
                                            name="game_small_icon" />
                                        @if ($t_game->game_small_icon)
                                            <img class="img-fluid d-block p-b-30 m-auto"
                                                src="{{ asset('uploads/Tournamant/GameIcon/' . $t_game->game_small_icon) }}"
                                                style="width: 150px;">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <label for="game_banner" class="mb-4">Game Banner</label>
                                        <input type="file" id="input-file-max-fs" class="dropify"
                                            name="game_banner" />

                                        <label for="prev" class="mb-3 mt-3 d-block">Old Game Banner</label>
                                        @if ($t_game->game_banner)
                                            <img class="img-fluid d-block p-b-30 m-auto"
                                                src="{{ asset('uploads/Tournamant/GameBanner/' . $t_game->game_banner) }}"
                                                style="width: 150px;">
                                        @endif
                                    </div>

                                    <div class="card-body">
                                        <label for="game_background" class="mb-4">Game Background Image</label>
                                        <input type="file" id="input-file-max-fs" class="dropify"
                                            name="game_background" />

                                        <label for="prev" class="mb-3 mt-3 d-block">Old Game Background</label>
                                        @if ($t_game->game_background)
                                            <img class="img-fluid d-block p-b-30 m-auto"
                                                src="{{ asset('uploads/Tournamant/GameBackground/' . $t_game->game_background) }}"
                                                style="width: 150px;">
                                        @endif
                                    </div>


                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10 m-t-20">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- File Upload --}}
    <script src="{{ asset('/assets/backend/plugins/dropify/dist/js/dropify.min.js') }}"></script>
    {{-- Multiple Select --}}

    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });

        tinymce.init({
            selector: '#game_description',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [{
                    title: 'My page 1',
                    value: 'https://www.codexworld.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.codexqa.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'https://www.codexworld.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.codexqa.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            file_picker_callback: (callback, value, meta) => {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {
                        text: 'My text'
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {
                        alt: 'My alt text'
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [{
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 400,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image table',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });

        tinymce.init({
            selector: '#game_control',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [{
                    title: 'My page 1',
                    value: 'https://www.codexworld.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.codexqa.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'https://www.codexworld.com'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.codexqa.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            file_picker_callback: (callback, value, meta) => {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {
                        text: 'My text'
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {
                        alt: 'My alt text'
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [{
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 400,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image table',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>
@endsection
