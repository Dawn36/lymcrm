<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">

            <div class="panel-container show">
                <div class="panel-content">
                    <div id="js-lightgallery">
                        <a class="" href="assets/dist/img/demo/gallery/1.jpg" data-sub-html="The free in pointed they their for the so fame.">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/1.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/2.jpg" data-sub-html="Sinking self-interest along four magazine he each specially rewritten">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/2.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/3.jpg" data-sub-html="More and of are the of wonder, make written it checks, intrigued its the in.">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/3.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/4.jpg" data-sub-html="And review, them. Turns second was enough those however the I wanting, written, above release unmoved would by slowly have peacefully">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/4.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/5.jpg" data-sub-html="Was up the fresh candidates, concepts example">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/5.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/6.jpg" data-sub-html="Few one what is him for team- little deceleration the the surely is well ran lifted">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/6.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/7.jpg" data-sub-html="Concepts diet, personalities those life quietly every dressing epic in of men, presented. External their and music">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/7.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/8.jpg" data-sub-html="Hunt, problems the on where your into so of which have he set he on instead, have shared of behind people">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/8.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/9.jpg" data-sub-html="Him bread deep was meals we've amped rather it of some contact familiar this learn">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/9.jpg" alt="image">
                        </a>
                        <a class="" href="img/demo/gallery/10.jpg" data-sub-html="And greatest lie as any as is and brown and tone as check to I o'clock time">
                            <img class="img-responsive" src="img/demo/gallery/thumb/10.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/11.jpg" data-sub-html="Ut horses support succeeding, one clear cheerful, on would">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/11.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/12.jpg" data-sub-html="harmonics, several from there character headline">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/12.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/13.jpg" data-sub-html="what effort initial each real the refinements. I have in here's will. ">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/13.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/14.jpg" data-sub-html="Neuter. Contribution his from to more because being the in design rather, concept both of.">
                            <img class="assets/dist/img-responsive" src="img/demo/gallery/thumb/14.jpg" alt="image">
                        </a>
                        <a class="" href="assets/dist/img/demo/gallery/15.jpg" data-sub-html="With to contact that had posterity in at and in to the entirely as so">
                            <img class="img-responsive" src="assets/dist/img/demo/gallery/thumb/15.jpg" alt="image">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var $initScope = $('#js-lightgallery');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 150,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });

</script>