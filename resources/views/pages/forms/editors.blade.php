@extends('layouts.index')
{{--@push('style')--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">--}}
{{--@endpush--}}
@section('content')




  <div class="content-wrapper">

            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <p class="text-sm mb-0">
                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
              </p>
            </div>

  </div>


@endsection


@push('scripts')
<!-- Summernote -->
{{--<script src="../../plugins/summernote/summernote-bs4.min.js"></script>--}}
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endpush
