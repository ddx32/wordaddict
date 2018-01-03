<div class="past-issues">
  <h2>Past Issues</h2>

  <ul>
    @while($past_issues->have_posts()) @php($past_issues->the_post())
      <li>#{{ get_field('issue_number') }} {{ the_title() }}</li>
    @endwhile
    @php(wp_reset_postdata())
  </ul>
</div>