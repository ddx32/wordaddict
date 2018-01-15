<div class="past-issues">
  <h2 class="past-issues-h2">Past Issues</h2>

  <section class="past-issues-links">
    @while($past_issues->have_posts()) @php($past_issues->the_post())
      <a href="{{ the_permalink() }}" class="past-issues-link">
        <img src="{{ get_field('issue_cover')['sizes']['medium'] }}" class="past-issues-cover">
        {{ the_title() }}
      </a>
    @endwhile
    @php(wp_reset_postdata())
  </section>
</div>