@extends('app.admin.layouts.default')


@section('title') {{{ $title }}} :: @parent @stop


@section('styles')

<link href="{{ asset('assets/globals/plugins/x-editables/css/bootstrap-editable.css') }}" rel="stylesheet"/>

<link href="{{ asset('assets/admin/css/plugins/bootstrap-wysihtml5-0.0.3.css') }}" rel="stylesheet"/>


@endsection


@section('main')

<h1>Welcome to the Edit template page.</h1>
<form action="{{url('admin/savetemplate')}}" method="post" data-parsley-validate="true" name="form-wizard">
  <input type="hidden" name="_token" value="{{csrf_token()}}"> 
  <p></p>
  <input type="hidden" name="id" value="{{$template->id}}">
  <textarea id="bodyField" name="content">{!!$template->text!!}</textarea>
  <input type="submit" value="submit">
</form>

@ckeditor('bodyField');

@endsection

@section('scripts') @parent
      <script src="{{ asset('assets/admin/js/welcome-settings-editable.js') }}"></script>
    @endsection 
<!-- <script type="text/javascript">
      window.onload = function () {
          
              var edt = CKEDITOR.replace('bodyField', { toolbar: 'Basic' });
CKFinder.setupCKEditor(edt, '/ckfinder/');

              var t = <%="how to set the data" %>;
              CKEDITOR.instances.editor1.setData(t);
              
}
<script type="text/javascript">

  CKEDITOR.instances['bodyField'].setData("how to start the email template");

</script> -->