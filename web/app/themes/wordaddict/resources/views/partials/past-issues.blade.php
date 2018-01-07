<div class="past-issues">
  <h2>Past Issues</h2>

  <ul>
    @while($past_issues->have_posts()) @php($past_issues->the_post())
      <li><a href="{{ the_permalink() }}">#{{ get_field('issue_number') }} {{ the_title() }}</a></li>
    @endwhile
    @php(wp_reset_postdata())
  </ul>
</div>