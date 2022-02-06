<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div id="js-lightgallery">
                        <?php for ($i=0; $i <count($depositImg) ; $i++) { 
                          
                        ?>
                        <a href="<?php echo $depositImg[$i]['file_path'] ?>" target="_blank"><img class="img-responsive" src="<?php echo $depositImg[$i]['file_path'] ?>" alt="image" style="height: 118px; width: 118px"></a>
                            
                       <?php }  ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // $(document).ready(function() {
    //     var $initScope = $('#js-lightgallery');
    //     if ($initScope.length) {
    //         $initScope.justifiedGallery({
    //             border: -1,
    //             rowHeight: 150,
    //             margins: 8,
    //             waitThumbnailsLoad: true,
    //             randomize: false,
    //         }).on('jg.complete', function() {
    //             $initScope.lightGallery({
    //                 thumbnail: true,
    //                 animateThumb: true,
    //                 showThumbByDefault: true,
    //             });
    //         });
    //     };
    //     $initScope.on('onAfterOpen.lg', function(event) {
    //         $('body').addClass("overflow-hidden");
    //     });
    //     $initScope.on('onCloseAfter.lg', function(event) {
    //         $('body').removeClass("overflow-hidden");
    //     });
    // });

</script>