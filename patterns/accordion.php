<?php
/**
 * Title: Brutalist Accordion
 * Slug: tier4/accordion
 * Categories: tier4, featured
 * Description: An accordion component with brutalist borders and styling.
 */
?>
<!-- wp:group {"className":"space-y-6"} -->
<div class="wp-block-group space-y-6">
    <!-- wp:details {"className":"border-8 border-black bg-white group","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <details class="wp-block-details border-8 border-black bg-white group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:summary {"className":"p-4 font-bold text-xl cursor-pointer list-none flex justify-between items-center hover:bg-cyan-400 transition-colors"} -->
        <summary class="wp-block-summary p-4 font-bold text-xl cursor-pointer list-none flex justify-between items-center hover:bg-cyan-400 transition-colors">ACCORDION TITLE <span class="text-sm font-normal ml-2">日本語</span></summary>
        <!-- /wp:summary -->
        <!-- wp:group {"className":"p-6 border-t-8 border-black"} -->
        <div class="wp-block-group p-6 border-t-8 border-black">
            <!-- wp:paragraph {"className":"text-lg"} -->
            <p class="text-lg">This is the content inside the accordion. It can contain any content you like.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </details>
    <!-- /wp:details -->
</div>
<!-- /wp:group -->
