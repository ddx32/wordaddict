@while($latestissue->have_posts()) @php($latestissue->the_post())

<div class="latest-issue" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ get_field('main_artwork')['sizes']['huge'] }})">
  <div class="latest-issue-content">
    <div class="latest-issue-image">
      <img src="{{ get_field('issue_cover')['sizes']['medium'] }}" class="issue-cover-img">
    </div>
  
    <div class="latest-issue-teaser">
      <h2><a href="{{ the_permalink() }}" class="latest-issue-name">#{{ get_field('issue_number') }} {{ the_title() }}</a></h2>
      <p>{{ get_field('front_page_description') }}</p>
      <div class="latest-issue-links">
        <a href="{{ the_permalink() }}" class="btn btn-white">View Issue</a>
      </div>
    </div>
  </div>
</div>

@endwhile
@php(wp_reset_postdata())