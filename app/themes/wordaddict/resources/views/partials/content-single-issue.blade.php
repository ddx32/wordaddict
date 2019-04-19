<article class="single-issue-content">
    <section class="single-issue-main-article">
        <div class="intro-riddle">
            @php(the_field('intro_riddle'))

            @if(get_field('quote_author'))
            <div class="quote-author">
                @php(the_field('quote_author'))
            </div>
        @endif
        </div>

       
    
        @php(the_content())
    </section>
    
    <aside class="single-issue-metadata">
        <div class="metadata-main">
            <img src="{{ $cover_image['sizes']['medium'] }}" class="single-issue-cover">
            <span class="single-issue-number">Excerpt from Issue #{{ $issue_number }}</span>
            <h1 class="single-issue-name">{{ get_the_title() }}</h1>
            <span class="single-issue-release">Released {{ $release_date }}</span>
            <a class="single-issue-pdf" href="{{ get_field('full_issue_pdf') }}">Download PDF</a>
        </div>
        
        <div class="metadata-credits">
            @if(have_rows('contributors'))
        
            <h4 class="single-issue-contributors">Contributors</h4>
            
            <ul class="single-issue-ul">
                @while(have_rows('contributors')) @php(the_row())
                    <li>@php(the_sub_field('contributor'))</li>
                @endwhile
            </ul>

            @php(the_field('more_metadata'))
            @endif
        </div>
    </aside>
</article>