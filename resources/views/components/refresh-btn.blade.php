<li class="nav-item">
    <a href="javascript:void(0);" class="container-refresh nav-link">
        <i class="fa fa-refresh"></i>
    </a>
</li>
<script>
    $('.container-refresh').off('click').on('click', function() {
        $.admin.reload();
        $.admin.toastr.success('{{ __('admin.refresh_succeeded') }}', '', {positionClass:"toast-top-center"});
    });
</script>
