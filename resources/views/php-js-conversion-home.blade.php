<script type='text/javascript'>
    var errors = false; 
    @if(count($errors) > 0)
        var errors = true;  
    @endif 
    var allDogs = {!! $allDogs !!}; 
    var allTags = {!! $allTagsJSON !!}; 
</script>