                    <div class="news-card">
                        <div class="card-img">
                            <a href="{{$link ?? '#'}}" target="_blank" title="Αρθρο">
                                <img src="{{$img ?? '#'}}" alt="article-page" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="font-heading4">
                                <a href="{{$link ?? '#'}}" target="_blank" title="Αρθρο" class="hover-underline">
                                    {{$title ?? 'TITLE_NOT_FOUND'}}
                                </a>
                            </h4>
                            <p>
                               {{$info ?? 'INFO_NOT_FOUND'}}
                            </p>
                            <span>{{$date ?? 'DATE_NOT_FOUND'}}</span>
                        </div>
                    </div>