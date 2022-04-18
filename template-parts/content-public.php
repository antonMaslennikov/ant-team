<?php
/*
Template Name: страница загрузки
*/
get_header();
?>
<main class="article-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'page' );
?>
    <?
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

<script>
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };
    $ = jQuery;
    $(document).ready(function () {
        if(getUrlParameter('file')) {
            $.post(
                "https://www.google-analytics.com/collect",
                {
                    v: '1',
                    tid: 'UA-127070389-1',
                    cid: '12xx916x95.13x6127xx4',
                    t: 'event',
                    ec: "Download",
                    ea: "download_" + getUrlParameter('file'),
                    el: "download",
                },
            );
            $.ajax({
                url: '/public/'+"<?=$_GET['file']?>",
                dataType: 'binary',
                xhrFields: {
                    'responseType': 'blob'
                },
                success: function(data, status, xhr) {
                    var blob = new Blob([data], {type: xhr.getResponseHeader('Content-Type')});
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "<?=$_GET['file']?>";
                    link.click();
                }
            });

        }
    });

</script>
</main><!-- #main -->
<?php
get_footer();
?>
