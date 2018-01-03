<div class="latest-issue">
  <div class="latest-issue-image">

  </div>

  <div class="latest-issue-teaser">
    @while($latestissue->have_posts()) @php($latestissue->the_post())
      <h2>{{ the_title() }}</h2>
      <p>{{ get_field('front_page_description') }}</p>
    @endwhile
    @php(wp_reset_postdata())
  </div>
</div>