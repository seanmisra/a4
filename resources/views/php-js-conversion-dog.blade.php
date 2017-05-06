<script type='text/javascript'>
    var imagePath = '{{ $imagePath }}'; 
    var imagePathOne = '{{ (isset($similarBreedImgs[0])) ? $similarBreedImgs[0] : "" }}'; 
    var imagePathTwo = '{{ (isset($similarBreedImgs[1])) ? $similarBreedImgs[1] : "" }}'; 
    var imagePathThree = '{{ (isset($similarBreedImgs[2])) ? $similarBreedImgs[2] : "" }}'; 
    var imagePathFour = '{{ (isset($similarBreedImgs[3])) ? $similarBreedImgs[3] : "" }}'; 

    var similarOne = '{{ (isset($similarBreeds[0])) ? $similarBreeds[0] : "" }}'; 
    var similarTwo = '{{ (isset($similarBreeds[1])) ? $similarBreeds[1] : "" }}'; 
    var similarThree = '{{ (isset($similarBreeds[2])) ? $similarBreeds[2] : "" }}'; 
    var similarFour = '{{ (isset($similarBreeds[3])) ? $similarBreeds[3] : "" }}'; 

    var facts = {!! $factsJSON !!}; 
</script>