@include('partials.issue-header-logo')

<header class="issue-header" style="background-image: url({{ $artwork_image['sizes']['huge'] }})">
    <div class="issue-header-summary">
        <img src="{{ $cover_image['sizes']['medium'] }}" class="issue-cover-img">
        <div class="issue-header-summary-text">
            <h1 class="issue-header-name">
                <small>
                    Issue #{{ $issue_number }}
                </small>
                
                {{ get_the_title() }}
            </h1>
            <div class="issue-release-date">
                Released: {{ $release_date }}
            </div>

            <a href="{{ get_field('full_issue_pdf') }}" class="btn btn-pdfdownload">Download full issue</a>
        </div>
    </div>
</header>