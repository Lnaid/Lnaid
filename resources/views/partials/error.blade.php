<script>
    toastr.options = {
        preventDuplicates: true,
        positionClass: "{{ $position }}",
        timeOut: 0,
    }

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif       
</script>