<!DOCTYPE html>
<html lang="en">
@include('Backend.Layouts.header')
<body class="">
  <div class="wrapper">
  @include('Backend.Layouts.sidebar')
    <div class="main-panel">
      @include('Backend.Layouts.nav')
      @yield('page_content')
      @include('Backend.Layouts.footer')
    </div>
  </div>
  @include('Backend.Layouts.logout_modal')
  @include('Backend.Layouts.footer_links')

  @stack('scripts')

<script src="{{env('PUBLIC_PATH')}}/node_modules/tinymce/tinymce.js"></script>
<script type="text/javascript">
   tinymce.init({
       selector:'textarea.tiny-mce',
       width: 900,
       height: 300,
       plugins : ["advlist autolink lists link image charmap print preview anchor pagebreak", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages tinymcespellchecker"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages |spellchecker",
        spellchecker_language: 'en',
       link_default_protocol: 'https',
   });
</script>

<script>
    window.DyeCamp = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      'adminId' => Auth::guard('admin')->user()->id,
      'permissions' => Auth::guard('admin')->user()->permissions()->pluck('name')->toArray()
  ]);
  ?>
</script>
</body>
</html>