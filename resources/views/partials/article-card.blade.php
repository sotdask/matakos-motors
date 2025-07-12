 <div class="article-card">
     <div class="article-title">
         <a href="{{ $link ?? '#' }}" target="_blank" title="article">
             <h2 class="font-heading3">
                 {{ $title ?? 'TITLE_NOT_FOUND' }}
             </h2>
         </a>
     </div>
     <div class="line"></div>
     <div class="card-body">
         <p>
             {{ $info ?? 'INFO_NOT_FOUND' }}
         </p>
         <div class="see-more">
             <span class="date">
                 {{ $date ?? 'DATE_NOT_FOUND' }}
             </span>
             <a href="{{ $link ?? '#' }}" target="_blank" title="Article" class="main-btn">
                 Μάθε Περισσότερα
             </a>
         </div>
     </div>
 </div>
